<?php

namespace App\Modules;

use App\Controllers\Controller;

class Route {

    private array $routes = [];

    public function newRoute (string $method, string $path, array|string|callable|Controller $controller) : void
    {
        $this -> routes[$method][$path] = $controller;
    }

    public function getRoutes () : array
    {
        return $this -> routes;
    }

    public function get (string $path, array|string|callable|Controller $controller) : void
    {
        $this -> newRoute('GET', $path, $controller);
    }

    public function dispatch () : void
    {
        // [$controller, $method] = $this -> routes['GET']['/'];
        // $instance = new $controller;
        // $instance -> $method();
    }
}