<?php

namespace App\Modules;

class Route {
    private array $routes = [];

    public function newRoute (string $method, string $path, string $controller) : void
    {
        $this -> routes[$method][$path] = $controller;
    }

    public function getRoutes () : array
    {
        return $this -> routes;
    }
    public function get (string $path, string $controller = '') : void
    {
        $this -> newRoute('GET', $path, $controller);
    }

    public function post (string $path, string $controller = '') : void
    {
        $this -> newRoute('POST', $path, $controller);
    }

    public function update (string $path, string $controller = '') : void
    {
        $this -> newRoute('PUT', $path, $controller);
    }

    public function delete (string $path, string $controller = '') : void
    {
        $this -> newRoute('DELETE', $path, $controller);
    }
}