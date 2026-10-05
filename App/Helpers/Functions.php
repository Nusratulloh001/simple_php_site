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
    echo "<pre style='background-color: black; color: orange; border-radius: 5px; margin: 5px; padding: 10px; font-size: 18px;'>";
    print_r($value);
    echo "</pre>";
}

function printExceptionText(Exception $e) {
    echo "Хатогӣ боздошт шуд: " . $e -> getMessage() . "<br>";
    echo "Ҳуҷҷат: " . $e -> getFile() . "<br>";
    echo "Сатр (хат): " . $e -> getLine() . "<br>";
    echo "Code: " . $e -> getCode() . "<br>";
    echo "<pre>";
    echo $e -> getTraceAsString();
    echo "<pre>";
}

function myErrorHandler (int $errno, string $msg, string $file, int $line) : void 
{
    echo "<div style='border-style: inset, border-width: 2;'>";
    echo "Хатогӣ рух дод, бо коди <b>{$errno}<b>!<br>";
    echo "Ҳуҷат: <tt>{$file}</tt>, хати: {$line}<br>";
    echo "Хатогӣ: <i>{$msg}<i>";
    echo "</div>";
}