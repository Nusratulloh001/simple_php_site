<?php

require_once __DIR__ . "/../views/includes/session.php";
require __DIR__ . "/../classes/DB.php";

$db = new DB;

$pageTitle = "Вход - Портфолио";
$errors = [];


if (!isLoggedIn('user')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = trim($_POST['login']) ?? '';
        $password = trim($_POST['password']) ?? '';

        $user = $db -> query(
            "SELECT * FROM users WHERE email = :email", 
            ['email' => $login]
        ) -> fetch();
        if (password_verify($password, $user['password'])) {
            $_SESSION[$user['role']] = [
                'userName' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role']
            ];
            header("Location: /profile");
            exit;
        } else {
            $error = 'Неверный логин или пароль!';
        }
    }
}

view("/../views/login.php",[
    'pageTitle' => $pageTitle,
    'errors' => $errors
]);