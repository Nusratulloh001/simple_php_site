<?php

namespace App\Models;

class User {
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $role;
    protected string $created;
    protected string $updated;

    public function __construct(string $name)
    {
        $this -> name = $name;
    }

    protected function init () : void
    {
        //
    }
    public function __destruct()
    {
        // destroy db;
    }
}