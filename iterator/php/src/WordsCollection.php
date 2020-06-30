<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator;


use Iterator;

/**
 * Class WordsCollection
 * @package DesignPatterns\Iterator
 */
class WordsCollection implements \IteratorAggregate
{

    private array $items = [];

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $item
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    /**
     * @return Iterator
     */
    public function getReverseIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }

}