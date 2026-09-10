<?php

require __DIR__ . "/../views/includes/session.php";


$user = $_SESSION['user'];

if (!isLoggedIn('user')) {
    header('Location: /login');
    exit;
}

view("/../views/profile.php", [
    'pageTitle' => "Профиль - Портфолио",
    'user' => $user
]);