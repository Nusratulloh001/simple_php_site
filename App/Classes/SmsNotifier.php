<?php

namespace App\Classes;

use App\Interfaces\NotifierInterface;
use Override;

class SmsNotifier implements NotifierInterface
{
    #[Override]
    public function send(string $message): string
    {
        return "SMS: {$message}<br>";
    }
}