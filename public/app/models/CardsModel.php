<?php
require_once __DIR__ . '/../../functions/connection.php';

class CardsModel {
    public function getCardsData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM cards");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCardsSectionData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM CardsSection");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}