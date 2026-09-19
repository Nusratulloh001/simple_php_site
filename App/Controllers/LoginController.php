<?php

use App\Modules\Databases\DB;

$db = new DB;

$pageTitle = "Вход - Портфолио";
$errors = [];

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
            'role' => $user['role'],
            'password' => $user['password']
        ];
        header("Location: /profile");
        exit;
    }
}

view("/../Views/login.view.php",[
    'pageTitle' => $pageTitle,
    'errors' => $errors
]);