<?php
session_start();
require_once __DIR__ . '/../../models/admin/AdminCardsModel.php';

class AdminCardsController {
    public function __construct() {
        if (empty($_SESSION['login'])) {
            echo '<p class="my-5 text-center h2">User unauthorized!</p>';
            echo '<a href="/login" class="d-block mt-3 text-center">Login</a>';
            die;
        }
    }

    public function index() {
        $model = new AdminCardsModel();
        $data['cards'] = $model->getAllCards();
        $data['editCard'] = null;

        if (isset($_GET['edit'])) {
            $editId = $_GET['edit'];
            $data['editCard'] = $model->getCardById($editId);
        }
        require_once __DIR__ . '/../../views/admin/admin_cards.view.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $filename = $_FILES['image']['name'];
            $upload = __DIR__ . '/../../../assets/img/' . $filename;
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);
            $model = new AdminCardsModel();
            $model->addCard($title, $description, $filename);
            header('Location: /admin/cards');
            exit;
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $filename = $_FILES['image']['name'];

            if (!empty($filename)) {
                $upload = __DIR__ . '/../../assets/img/' . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], $upload);
            } else {
                $filename = $_POST['existing_filename'];
            }

            $model = new AdminCardsModel();
            $model->updateCard($id, $title, $description, $filename);
            header('Location: /admin/cards');
            exit;
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
            $id = $_POST['id'];
            $model = new AdminCardsModel();
            $model->deleteCard($id);
            header('Location: /admin/cards');
            exit;
        }
    }
}

$controller = new AdminCardsController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $controller->add();
    } elseif (isset($_POST['update'])) {
        $controller->update();
    } elseif (isset($_POST['delete'])) {
        $controller->delete();
    }
} else {
    $controller->index();
}