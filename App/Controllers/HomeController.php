<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index () : void
    {
        view('home');
    }
    public function about () : void
    {
        view("about");
    }
}