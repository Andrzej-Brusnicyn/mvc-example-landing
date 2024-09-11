<?php
require_once __DIR__ . '/../../functions/connection.php';

class HeroModel {
    public function getHeroData() {
        $pdo = Database::getInstance()->getConnection();
        $sql = $pdo->prepare("SELECT * FROM hero");
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}