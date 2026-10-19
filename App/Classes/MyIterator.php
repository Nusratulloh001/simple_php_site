<?php

namespace App\Classes;

use Iterator;
use Override;

class MyIterator implements Iterator
{
    private mixed $position = 0;
    private array|object $collection;

    public function __construct(array|object $collection)
    {
        $this -> collection = $collection;
    }

    #[Override]
    public function rewind(): void
    {
        $this -> position = 0;
    }

    #[Override]
    public function current () : mixed
    {
        return $this -> collection[$this -> key()];
    }

    #[Override]
    public function key () : mixed
    {
        return $this -> position;
    }

    #[Override]
    public function next(): void
    {
        $this -> position++;
    }

    #[Override]
    public function valid () : bool
    {
        return isset($this -> collection[$this -> position]);
    }
}