<?php

namespace App\Enums;

enum UserStatus : string
{
    case Admin = 'admin';
    case User = 'user';
    case Guest = 'guest';

    public function message () : string
    {
        return match ($this) {
            self::Admin => 'You Are ' . self::Admin -> value,
            self::User => "You are " . self::User -> value,
            self::Guest => "You are " . self::Guest -> value
        };
    }
    
    public function test ()
    {
        return $this;
    }
}