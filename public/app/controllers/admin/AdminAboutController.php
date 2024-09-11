<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminAboutModel.php';

class AdminAboutController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminAboutModel();
        $data['about'] = $model->getAboutData();
        require_once __DIR__ . '/../../views/admin/admin_about.view.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $filename = $_FILES['image']['name'];

            if (!empty($filename)) {
                $upload = __DIR__ . '/../../../assets/img/' . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], $upload);
            } else {
                $filename = $_POST['existing_filename'];
            }

            $model = new AdminAboutModel();
            $model->updateAboutData($title, $filename, $description);
            header('Location: /admin/about');
            exit;
        }
    }
}

$controller = new AdminAboutController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update();
} else {
    $controller->index();
}
