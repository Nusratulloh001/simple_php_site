<?php

namespace App\Classes;

use IteratorAggregate;
use Traversable;
use Override;

class LimitMyIterator implements IteratorAggregate
{
    private array $collection;
    private int $limit;

    public function __construct (array $collection, int $limit = 2)
    {
        $this -> collection = $collection;
        $this -> limit = $limit;
    }

    #[Override]
    public function getIterator() : Traversable
    {
        $limited = array_slice($this -> collection, 2, $this -> limit);
        return new MyIterator($limited);
    }
}