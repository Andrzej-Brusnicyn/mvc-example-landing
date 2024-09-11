<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminCardsModel {
    public function getAllCards() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM cards");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCardById($id) {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM cards WHERE id = :id");
        $sql->execute(['id' => $id]);
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function addCard($title, $description, $filename) {
        $pdo = Database::getInstance()->getConnection();
        $res = "INSERT INTO cards (title, description, filename) VALUES (:title, :description, :filename)";
        $query = $pdo->prepare($res);
        return $query->execute(['title' => $title, 'description' => $description, 'filename' => $filename]);
    }

    public function updateCard($id, $title, $description, $filename) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE cards SET title = :title, description = :description, filename = :filename WHERE id = :id";
        $query = $pdo->prepare($res);
        return $query->execute(['id' => $id, 'title' => $title, 'description' => $description, 'filename' => $filename]);
    }

    public function deleteCard($id) {
        $pdo = Database::getInstance()->getConnection();
        $res = "DELETE FROM cards WHERE id = :id";
        $query = $pdo->prepare($res);
        return $query->execute(['id' => $id]);
    }
}
