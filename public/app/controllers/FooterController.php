<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/FooterModel.php';

class FooterController {
    public function index() {
        $model = new FooterModel();
        $data['footer'] = $model->getFooterData();
        require_once __DIR__ . '/../views/footer.view.php';
    }
}