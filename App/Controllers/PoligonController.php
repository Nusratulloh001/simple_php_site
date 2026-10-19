<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Iterators\NumberCollection;
use App\Models\Users;

class PoligonController extends Controller
{
    public function index () {
        $collection = new NumberCollection([10, 20, 30, 40]);
        $users = new Users();
        foreach ($users as $user) {
            d($user);
        }
    }
}