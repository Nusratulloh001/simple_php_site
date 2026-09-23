<?php

namespace App\Classes;

use App\Classes\Interfaces\CoverInterface;
use Override;

class Topic implements CoverInterface
{
    public string $imagePath;
    public string $title;
    public string $content;
    public ?int $createdAt = null;

    public function __construct (string $title, string $content, ?int $createdAt = null)
    {
        $this -> title = $title;
        $this -> content = $content;

        if (empty($createdAt)) {
            $this -> createdAt = time();
        } else {
            $this -> createdAt = $createdAt;
        }
    }

    #[Override]
    public function setImage (string $path) : void
    {
        $this -> imagePath = $path;
    }

    #[Override]
    public function getImage () : string
    {
        return $this -> imagePath;
    }
}