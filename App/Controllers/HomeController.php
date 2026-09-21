<?php

namespace App\Controllers;

class HomeController implements Controller
{
    public function index () : void
    {
        view('/../Views/home.view.php', ['pageTitle' => "Главная - Портфолио"]);
    }
}