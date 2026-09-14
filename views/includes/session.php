<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function isLoggedIn (string $sessionKey) : bool {
    return isset($_SESSION[$sessionKey]);
}

function inSessin () {
    $persons = ['user', 'admin'];
    foreach ($persons as $person) {
        if (isLoggedIn($person)) {
            return $person;
        }
    }
}