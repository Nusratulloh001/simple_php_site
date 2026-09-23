<?php

namespace App\Classes;

use App\Classes\Interfaces\AvatarInterface;
use App\Classes\Interfaces\CoverInterface;
use App\Classes\User;
use Override;

class FrontUser extends User implements AvatarInterface
{
    public string $path;

    #[Override]
    public function setImage(string $path): void
    {
        $this -> path = $path;
    }

    #[Override]
    public function getImage(): string
    {
        return $this -> path;
    }

    public function test ()
    {
        return self::class;
    }
}