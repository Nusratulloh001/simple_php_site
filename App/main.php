<?php

use App\Modules\Route;

$route = new Route;
$route -> get('/');
$route -> delete('/post');
$route -> get('/about');
$route -> get('/contacts');
$route -> post('/post');
$route -> post('/create');

$route -> post('/destroy');
d($route -> getRoutes());