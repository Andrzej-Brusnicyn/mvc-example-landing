<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminHeroModel {
    public function getHeroData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM hero");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateHeroData($title, $filename) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE hero SET title=:title, filename=:filename";
        $query = $pdo->prepare($res);
        return $query->execute(['title' => $title, 'filename' => $filename]);
    }
}