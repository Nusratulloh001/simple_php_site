<?php

namespace App\Classes;

class User {
    public string $email;
    public string $password;
    public string $firstName;
    public string $lastName;

    public function __construct(string $email, string $password, string $firstName, string $lastName)
    {
        $this -> email = $email;
        $this -> password = $password;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    public function getFullName () : string
    {
        $namesOnArray = array_filter([$this -> firstName, $this -> lastName]);
        $fullName = implode(' ', $namesOnArray);
        return $fullName ?? 'Anonim user';
    }
}