<?php

declare(strict_types=1);

namespace DesignPatterns\Bridge;


/**
 * Class ConcreteImplementationA
 * @package DesignPatterns\Bridge
 */
class ConcreteImplementationA implements IImplementation
{

    /**
     * @inheritDoc
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}