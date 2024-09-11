<?php
require_once __DIR__ . '/../../../functions/connection.php';

class AdminHeaderModel {
    public function getHeaderData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM header");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function updateHeaderData($adress, $phone, $email, $filename) {
        $pdo = Database::getInstance()->getConnection();
        $res = "UPDATE header SET adress=:adress, phone=:phone, email=:email, filename=:filename";
        $query = $pdo->prepare($res);
        return $query->execute(['adress' => $adress, 'phone' => $phone, 'email' => $email, 'filename' => $filename]);
    }
}