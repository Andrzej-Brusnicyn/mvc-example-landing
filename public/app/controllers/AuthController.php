<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/AuthModel.php';

class AuthController {
    public function login() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $userModel = new AuthModel();
            $user = $userModel->authenticate($login, $password);

            if ($user !== false && $user->id > 0) {
                $_SESSION['login'] = $user->login;
                header('Location: /admin/dashboard');
                exit();
            } else {
                header('Location: /login.php?error=invalid');
                exit();
            }
        }

        require_once __DIR__ . '/../views/admin/login.view.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }

    public function checkAuthentication() {
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: /login');
            exit();
        }
    }

    public function dashboard() {
        $this->checkAuthentication();
        require_once __DIR__ . '/../views/admin/dashboard.view.php';
    }
}