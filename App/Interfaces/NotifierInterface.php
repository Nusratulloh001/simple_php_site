<?php

namespace App\Interfaces;

interface NotifierInterface
{
    public function send (string $message) : string;
}