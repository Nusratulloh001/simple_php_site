<?php

use App\Modules\Route;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/App/Helpers/Functions.php";

$route = new Route;

require __DIR__ . "/App/main.php";
$route -> dispatch();