<?php

namespace App\Controllers;

class AboutController implements Controller
{
    public function index () : void
    {
        view("/../Views/about.view.php", 
            [
                'pageTitle' => "О нас - Портфолио"
            ]
        );
    }
}