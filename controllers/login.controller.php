<?php

require_once __DIR__ . "/../views/includes/session.php";

$pageTitle = "Вход - Портфолио";
$error = null;


if (!isLoggedIn('user')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = trim($_POST['login']) ?? '';
        $password = trim($_POST['password']) ?? '';

        if ($login === 'admin' && $password === "secret") {
            $_SESSION['user'] = [
                'userName' => "Nusrat",
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ];
            header("Location: /controllers/profile.controller.php");
            exit;
        } else {
            $error = 'Неверный логин или пароль!';
        }
    }
}

require __DIR__ . "/../views/login.php";