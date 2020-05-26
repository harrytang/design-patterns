<?php

namespace DesignPatterns\FactoryMethod;


/**
 * Class ConcreteCreator1
 * @package DesignPatterns\FactoryMethod
 */
class ConcreteCreator1 extends Creator
{

    /**
     * @inheritDoc
     */
    public function factoryMethod(): IProduct
    {
        return new ConcreteProduct1;
    }
}