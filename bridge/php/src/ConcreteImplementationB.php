<?php

declare(strict_types=1);

namespace DesignPatterns\Bridge;


/**
 * Class ConcreteImplementationB
 * @package DesignPatterns\Bridge
 */
class ConcreteImplementationB implements IImplementation
{

    /**
     * @inheritDoc
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}