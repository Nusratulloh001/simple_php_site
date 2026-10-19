<?php

namespace App\Modules;

use App\Controllers\Controller;

class Route {

    protected string $method;
    protected string $path;
    private array $routes = [];
    
    public function __construct()
    {
        $this -> method = $_SERVER['REQUEST_METHOD'];
        $this -> path = parse_url($_SERVER['REQUEST_URI'])['path'];
    }

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
        if (
            array_key_exists($this -> method, $this -> routes) &&
            array_key_exists($this -> path, $this -> routes[$this -> method])
            ) {
            [$controller, $method] = $this -> routes[$this -> method][$this -> path];
            $instance = new $controller;
            $instance -> $method();
        } else {
            abort(__DIR__ . "/../Views/error.view.php", 404);
        }
    }
}