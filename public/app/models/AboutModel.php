<?php
require_once __DIR__ . '/../../functions/connection.php';
class AboutModel {
    public function getAboutData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM about");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}