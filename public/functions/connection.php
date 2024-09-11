<?php
require_once __DIR__ . '/config.php';

class Database {
    private $pdo;
    private static $instance = null;

    private function __construct() {
        $config = new Config(__DIR__ . '/../.env');
        $host = $config->get('DB_HOST');
        $db = $config->get('DB_NAME');
        $user = $config->get('DB_USER');
        $password = $config->get('DB_PASS');
        $charset = $config->get('DB_CHARSET');

        try {
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $this->pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}