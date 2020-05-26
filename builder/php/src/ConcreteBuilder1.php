<?php

namespace DesignPatterns\Builder;

/**
 * Class ConcreteBuilder1
 * @package DesignPatterns\Builder
 */
class ConcreteBuilder1 implements IBuilder
{
    private Product1 $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset() {
        $this->product = new Product1;
    }

    public function producePartA(): void
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB(): void
    {
        $this->product->parts[] = "PartB1";
    }

    public function producePartC(): void
    {
        $this->product->parts[] = "PartC1";
    }

    /**
     * @return Product1
     */
    public function getProduct() {
        $product = $this->product;
        $this->reset();
        return $product;
    }
}