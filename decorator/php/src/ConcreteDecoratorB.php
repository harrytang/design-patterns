<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;


/**
 * Class ConcreteDecoratorB
 * @package DesignPatterns\Decorator
 */
class ConcreteDecoratorB extends Decorator
{
    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}