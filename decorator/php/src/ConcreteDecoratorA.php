<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;


/**
 * Class ConcreteDecoratorA
 * @package DesignPatterns\Decorator
 */
class ConcreteDecoratorA extends Decorator
{
    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}