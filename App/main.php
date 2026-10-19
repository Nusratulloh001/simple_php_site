<?php

use App\Controllers\PoligonController;

$route -> get('/poligon', [PoligonController::class, 'index']);