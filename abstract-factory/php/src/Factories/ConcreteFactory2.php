<?php
namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\AbstractProductA;
use DesignPatterns\AbstractFactory\Products\AbstractProductB;
use DesignPatterns\AbstractFactory\Products\ConcreteProductA2;
use DesignPatterns\AbstractFactory\Products\ConcreteProductB2;

/**
 * Class ConcreteFactory2
 * @package DesignPatterns\AbstractFactory\Factories
 */
class ConcreteFactory2 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}