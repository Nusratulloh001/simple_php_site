<?php

require __DIR__ . "/../views/includes/session.php";

$pageTitle = "Профиль - Портфолио";
$user = $_SESSION['user'];

if (!isLoggedIn('user')) {
    header('Location: /controllers/login.controller.php');
    exit;
}

require __DIR__ . "/../views/profile.php";