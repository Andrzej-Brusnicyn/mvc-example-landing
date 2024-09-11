<?php
require_once __DIR__ . '/../../functions/connection.php';

class AuthModel {
    public function authenticate($login, $password) {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT id, login FROM user WHERE login = :login AND password = :password");
        $sql->execute([
            ':login' => $login,
            ':password' => $password
        ]);
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}