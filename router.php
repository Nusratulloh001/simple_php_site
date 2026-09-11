<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Gemini idea
if ($path !== '/' && str_ends_with($path, '/')) {
    $path = rtrim($path, '/');
}

$routes = [
    '/'         => '/controllers/home.controller.php',
    '/about'    => '/controllers/about.controller.php',
    '/login'    => '/controllers/login.controller.php',
    '/profile'  => '/controllers/profile.controller.php',
    '/logout'   => '/controllers/logout.controller.php',
    '/register' => '/controllers/register.controller.php',
    '/poligon'  => '/controllers/poligon.controller.php'
];

if (array_key_exists($path, $routes)) {
    require __DIR__ . $routes[$path];
} else {
    abort(__DIR__ . '/controllers/error.controller.php', 404);
}