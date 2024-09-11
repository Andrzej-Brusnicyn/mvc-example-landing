<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminFooterModel.php';

class AdminFooterController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminFooterModel();
        $data['footer'] = $model->getFooter();
        require_once __DIR__ . '/../../views/admin/admin_footer.view.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $copyright = $_POST['copyright'];
            $model = new AdminFooterModel();
            $model->updateFooter($copyright);
            header('Location: /admin/footer');
            exit;
        }
    }
}

$controller = new AdminFooterController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update();
} else {
    $controller->index();
}