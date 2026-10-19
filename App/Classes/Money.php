<?php

namespace App\Classes;

final class Money
{
    public readonly float $amount;
    public readonly string $currency;

    private function __construct (float $amount, string $currency) 
    {
        $this -> amount = $amount;
        $this -> currency = $currency;
    }

    public static function usd (float $amount) : self
    {
        return new self($amount, 'USD');
    }

    public static function fromString (string $value) : self
    {
        [$amount, $currency] = explode(" ", $value);
        return new self((int) $amount, $currency);
    }
}