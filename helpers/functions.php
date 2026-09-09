<?php

function abort ($code = 404) : void {
    http_response_code($code);
    require __DIR__ . "/../controllers/error.controller.php";
}

function d (mixed $value) : void
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}