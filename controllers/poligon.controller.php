<?php

require __DIR__ . "/../classes/DB.php";

$id = 3;
$name = 'Nusret';
$email = 'nusret@gmail.com';
$password = password_hash(123, PASSWORD_DEFAULT);
$role = 'user';

$db = new DB();
$user = $db -> query('SELECT * FROM users WHERE id = :id', ['id' => $id]) -> fetch();