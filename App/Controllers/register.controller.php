<?php


require __DIR__ . "/../views/includes/session.php";
require __DIR__ . "/../classes/DB.php";

$db = new DB;

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username        = trim($_POST['username']);
    $email           = trim($_POST['email']);
    $password        = trim($_POST['password']);
    $passwordConfirm = trim($_POST['password_confirm']);
    $role            = $_POST['role'];


    if (!$username) {
        $errors[] = "Поля не должно быть пустым";
    }
    if (mb_strlen($email) > 0) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Не валидный адрес электронной почты";
        }
    } else {
        $errors[] = "Поля email не должно быт пустым";
    }

    if (mb_strlen($password) > 0) {
        if (mb_strlen($password) < 6) {
            $errors[] = "Парол не должно быть менше 6-ти символов";
        }
    } else {
        $errors[] = "Поля пароль не должно быт пустым";
    }

    if (mb_strlen($passwordConfirm) > 0) {
        if ($password !== $passwordConfirm) {
            $errors[] = "Пароли не соответствует";
        }
    } else {
        $errors[] = "Повторят парол";
    }

    if (count($errors) === 0) {
        $userWithName = $db -> query("SELECT * FROM `users` WHERE `username` = :username", [
            'username' => $username
        ]) -> fetchAll();

        $userWithEmail = $db -> query("SELECT * FROM `users` WHERE `email` = :email", [
            'email' => $email
        ]) -> fetchAll();
        
        if (count($userWithEmail) > 0 || count($userWithName) > 0) {
            $errors[] = "Ползовател с таким именем или почтам уже зарегистрирован";
        }
    }

    if (count($errors) === 0) {
        $result = $db -> query("INSERT INTO users (`username`, `email`, `password`, `role`) VALUES (:username, :email, :pass, :role)", [
            'username' => $username,
            'email' => $email,
            'pass' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role
        ]);
        if ($result) {
            $_SESSION[$role] = [
                'userName' => $username,
                'email' => $email,
                'role' => $role,
                'password' => $password
            ];
            header('Location: /profile');
            exit();
        }
    }
}

view("/../views/register.php", [
    'pageTitle' => "Регистрация - Портфолио",
    'errors' => $errors
]);