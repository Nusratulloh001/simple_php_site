<?php

class User {
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $role;
    protected string $created;
    protected string $updated;

    protected DB $db;

    public function __construct()
    {
        $this -> db = new DB;
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