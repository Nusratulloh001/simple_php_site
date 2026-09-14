<?php

require_once __DIR__ . "/../views/includes/session.php";
require __DIR__ . "/../classes/DB.php";

$db = new DB;

$pageTitle = "Вход - Портфолио";
$errors = [];

if (!inSessin()) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = trim($_POST['login']) ?? '';
        $password = trim($_POST['password']) ?? '';
        if (mb_strlen($login) > 0) {
            if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Не валидный логин лил email";
            }
        } else {
            $errors[] = "Поля логин не должно быт пустым";
        }
        $user = $db -> query(
                    "SELECT * FROM users WHERE email = :email", 
                    ['email' => $login]
                ) -> fetch();

        if (mb_strlen($password) > 0) {
            if (mb_strlen($password) < 6) {
                $errors[] = 'Пароль должел содержать не менее 6-и символов';
            } else if (!password_verify($password, $user['password'])) {
                $errors[] = 'Неверный пароль!';
            }
        } else {
            $errors[] = 'Поля пароля не должно быть пустым';
        }

        if (count($errors) == 0) {
            $_SESSION[$user['role']] = [
                'userName' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role']
            ];
            header("Location: /profile");
            exit;
        }
    }
}

view("/../views/login.php",[
    'pageTitle' => $pageTitle,
    'errors' => $errors
]);