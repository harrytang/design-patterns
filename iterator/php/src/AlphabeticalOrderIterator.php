<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator;


/**
 * Class AlphabeticalOrderIterator
 * @package DesignPatterns\Iterator
 */
class AlphabeticalOrderIterator implements \Iterator
{

    private $collection;

    private $position = 0;

    private $reverse = false;

    /**
     * AlphabeticalOrderIterator constructor.
     * @param $collection
     * @param bool $reverse
     */
    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }
}