<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminAboutModel {
    public function getAboutData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM about");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateAboutData($title, $filename, $description) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE about SET title=:title, filename=:filename, description=:description";
        $query = $pdo->prepare($res);
        return $query->execute(['title' => $title, 'filename' => $filename, 'description' => $description]);
    }
}