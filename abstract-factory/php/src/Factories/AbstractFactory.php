<?php
namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Products\AbstractProductA;
use DesignPatterns\AbstractFactory\Products\AbstractProductB;

/**
 * Interface AbstractFactory
 * @package DesignPatterns\AbstractFactory\Factories
 */
interface AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA;

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB;
}