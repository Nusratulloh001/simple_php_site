<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'         => '/controllers/home.controller.php',
    '/about'    => '/controllers/about.controller.php',
    '/login'    => '/controllers/login.controller.php',
    '/profile'  => '/controllers/profile.controller.php',
    '/logout'   => '/controllers/logout.controller.php',
    '/register' => '/controllers/register.controller.php',
];

if (array_key_exists($path, $routes)) {
    require __DIR__ . $routes[$path];
} else {
    require __DIR__ . "/pages/error.php";
}


if ($path === '/') {
    require __DIR__ . "/pages/home.php";
} else if ($path === '/about') {
    require __DIR__ . "/pages/about.php";
} else if ($path === '/login') {
    require __DIR__ . "/pages/login.php";
} else if ($path === '/profile') {
    require __DIR__ . "/pages/profile.php";
} else if ($path === '/logout') {
    require __DIR__ . "/pages/logout.php";
} else if ($path === '/register') {
    require __DIR__ . "/pages/register.php";
} else {
    require __DIR__ . "/pages/error.php";
}