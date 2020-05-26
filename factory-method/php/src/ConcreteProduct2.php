<?php


namespace DesignPatterns\FactoryMethod;


/**
 * Class ConcreteProduct2
 * @package DesignPatterns\FactoryMethod
 */
class ConcreteProduct2 implements IProduct
{

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}