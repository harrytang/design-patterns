<?php


namespace DesignPatterns\FactoryMethod;


/**
 * Class ConcreteCreator2
 * @package DesignPatterns\FactoryMethod
 */
class ConcreteCreator2 extends Creator
{
    /**
     * @inheritDoc
     */
    public function factoryMethod(): IProduct
    {
        return new ConcreteProduct2;
    }
}