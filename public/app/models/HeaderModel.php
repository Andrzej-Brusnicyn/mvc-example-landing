<?php
require_once __DIR__ . '/../../functions/connection.php';

class HeaderModel {
    public function getHeaderData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM header");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}