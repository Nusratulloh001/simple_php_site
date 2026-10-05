<?php

namespace App\Classes;

use App\Traites\UserTrait;
use Exception;
use App\Exceptions\AttributeException;
use App\Exceptions\PasswordException;

class User {

    use UserTrait;
    
    private string $email;
    private string $password;
    private ?string $firstName = null;
    private ?string $lastName = null;

    public function __construct(string $email, string $password, ?string $firstName, ?string $lastName)
    {
        $this -> email = $email;
        $this -> password = $password;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    /**
     * Хосияти номуаянро ҳамчун хосияти дохилӣ бар мегардонад
     * @return ?string
     */
    public function __get (?string $property) : string | Exception
    {
        if ($property === "password") {
            throw new PasswordException();
        } else if (!isset($this -> $property)) {
            throw new AttributeException($property);
        }    
        return $this -> $property;
    }

    /**
     * Арзиши хосиятро иваз мекунад
     * @param string $property
     * @param mixed $value
     * @return void
     */
    public function __set(string $property, mixed $value) : void
    {
        if (isset($this -> property)) {
            $this -> $property = $value;
        } else {
            throw new AttributeException($property);
        }
    }

    public function isPasswordCorrect (string $password) : bool
    {
        return $this -> password === $password;
    }
}