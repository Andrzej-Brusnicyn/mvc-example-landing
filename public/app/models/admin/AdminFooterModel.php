<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminFooterModel {
    public function getFooter() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM footer");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateFooter($copyright) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE footer SET copyright = :copyright";
        $query = $pdo->prepare($res);
        return $query->execute(['copyright' => $copyright]);
    }
}