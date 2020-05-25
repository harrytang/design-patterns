<?php
namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\AbstractProductA;
use DesignPatterns\AbstractFactory\Products\AbstractProductB;
use DesignPatterns\AbstractFactory\Products\ConcreteProductA1;
use DesignPatterns\AbstractFactory\Products\ConcreteProductB1;

/**
 * Class ConcreteFactory1
 * @package DesignPatterns\AbstractFactory\Factories
 */
class ConcreteFactory1 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }
}