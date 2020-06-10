<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;


/**
 * Class ConcreteComponent
 * @package DesignPatterns\Decorator
 */
class ConcreteComponent implements Component
{

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}