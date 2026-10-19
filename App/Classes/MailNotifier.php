<?php

namespace App\Classes;

use App\Interfaces\NotifierInterface;
use Override;
class MailNotifier implements NotifierInterface
{
    #[Override]
    public function send (string $message) : string
    {
        return "Email: {$message}!<br>";
    }
}