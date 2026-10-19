<?php

namespace App\Iterators;

use Iterator;
use Override;

class NumberCollection implements Iterator
{
    private int $position = 0;
    private array $items;

    public function __construct(array $items)
    {
        $this -> items = $items;
    }

    #[Override]
    public function rewind(): void
    {
        $this -> position = 0;
    }

    #[Override]
    public function current(): mixed
    {
        return $this -> items[$this -> position];
    }

    #[Override]
    public function key (): int
    {
        return $this -> position;
    }

    #[Override]
    public function next(): void
    {
        $this -> position++;
    }

    #[Override]
    public function valid(): bool
    {
        return isset($this -> items[$this -> position]);
    }
}