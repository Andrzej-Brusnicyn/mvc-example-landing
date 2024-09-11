<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/AboutModel.php';

class AboutController {
    public function index() {
        $model = new AboutModel();
        $data['about'] = $model->getAboutData();
        require_once __DIR__ . '/../views/about.view.php';
    }
}