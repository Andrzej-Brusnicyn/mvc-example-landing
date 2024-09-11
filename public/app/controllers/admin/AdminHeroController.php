<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminHeroModel.php';

class AdminHeroController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminHeroModel();
        $data['hero'] = $model->getHeroData();
        require_once __DIR__ . '/../../views/admin/admin_hero.view.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $filename = $_FILES['image']['name'];

            if (!empty($filename)) {
                $upload = __DIR__ . '/../../../assets/img/' . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], $upload);
            } else {
                $filename = $_POST['existing_filename'];
            }

            $model = new AdminHeroModel();
            $model->updateHeroData($title, $filename);
            header('Location: /admin/hero');
            exit;
        }
    }
}

$controller = new AdminHeroController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update();
} else {
    $controller->index();
}