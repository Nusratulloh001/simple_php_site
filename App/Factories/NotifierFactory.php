<?php

namespace App\Factories;

use App\Classes\MailNotifier;
use App\Classes\SmsNotifier;
use App\Interfaces\NotifierInterface;
use InvalidArgumentException;

class NotifierFactory 
{
    public static function create (string $type) : NotifierInterface
    {
        return match ($type) {
            'email' => new MailNotifier(),
            'sms' => new SmsNotifier(),
            default => throw new InvalidArgumentException("Намуди номаълум: {$type}")
        };
    }
}