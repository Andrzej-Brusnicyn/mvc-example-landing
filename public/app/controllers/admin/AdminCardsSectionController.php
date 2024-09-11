<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminCardsSectionModel.php';

class AdminCardsSectionController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminCardsSectionModel();
        $data['section'] = $model->getTitle();
        require_once __DIR__ . '/../../views/admin/admin_cards_section.view.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];

            $model = new AdminCardsSectionModel();
            $model->updateTitle($title);
            header('Location: /admin/cardsSection');
            exit;
        }
    }
}

$controller = new AdminCardsSectionController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update();
} else {
    $controller->index();
}