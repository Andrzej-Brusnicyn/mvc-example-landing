<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/HeroModel.php';

class HeroController {
    public function index() {
        $model = new HeroModel();
        $data['hero'] = $model->getHeroData();
        require_once __DIR__ . '/../views/hero.view.php';
    }
}