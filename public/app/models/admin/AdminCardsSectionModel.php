<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminCardsSectionModel {
    public function getTitle() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM CardsSection");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateTitle($title) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE CardsSection SET title = :title";
        $query = $pdo->prepare($res);
        return $query->execute(['title' => $title]);
    }
}