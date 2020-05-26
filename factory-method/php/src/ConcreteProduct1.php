<?php

namespace DesignPatterns\FactoryMethod;


/**
 * Class ConcreteProduct1
 * @package DesignPatterns\FactoryMethod
 */
class ConcreteProduct1 implements IProduct
{

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}