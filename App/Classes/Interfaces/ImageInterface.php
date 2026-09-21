<?php

namespace App\Classes\Interfaces;

interface ImageInterface {
    public function setImage (string $path) : void;
    public function getImage () : string;
}