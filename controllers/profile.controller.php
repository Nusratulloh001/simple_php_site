<?php

require __DIR__ . "/../views/includes/session.php";

$key = array_key_first($_SESSION);


view("/../views/profile.php", [
    'pageTitle' => "Профиль - Портфолио",
    'user' => $_SESSION[$key] ?? ''
]);