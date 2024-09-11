<?php
require_once __DIR__ . '/../../functions/connection.php';

class FooterModel {
    public function getFooterData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM footer");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}