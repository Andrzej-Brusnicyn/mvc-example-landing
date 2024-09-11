<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/HeaderModel.php';

class HeaderController {
    public function index() {
        $model = new HeaderModel();
        $data['header'] = $model->getHeaderData();
        require_once __DIR__ . '/../views/header.view.php';
    }
}