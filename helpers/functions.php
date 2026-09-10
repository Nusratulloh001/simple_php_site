<?php

function abort (string $viewOrController, int $code) : void {
    http_response_code($code);
    require $viewOrController;
}

function view (string $view, array $data = []) : void
{
    extract($data);
    require __DIR__ . $view;
}

function d (mixed $value) : void
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}