<?php

namespace App\Models;

use App\Modules\Databases\DB;

class Users
{ 
    private array $users;
    private DB $db;

    public function __construct()
    {
        $this -> db = new DB();
        $this -> init();
    }

    protected function init () : void
    {
        $query = "SELECT * FROM users";
        $this->users = $this -> db -> query($query)->fetchAll();
    }

    public function all () : array
    {
        return $this -> users;
    }
}