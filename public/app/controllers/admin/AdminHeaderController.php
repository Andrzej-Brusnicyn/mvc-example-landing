<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminHeaderModel.php';

class AdminHeaderController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminHeaderModel();
        $data['header'] = $model->getHeaderData();
        require_once __DIR__ . '/../../views/admin/admin_header.view.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $adress = $_POST['adress'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $filename = $_FILES['image']['name'];

            if (!empty($filename)) {
                $upload = __DIR__ . '/../../../assets/img/' . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], $upload);
            } else {
                $filename = $_POST['existing_filename'];
            }

            $model = new AdminHeaderModel();
            $model->updateHeaderData($adress, $phone, $email, $filename);
            header('Location: /admin/header');
            exit;
        }
    }
}

$controller = new AdminHeaderController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update();
} else {
    $controller->index();
}