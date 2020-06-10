<?php

declare(strict_types=1);

namespace DesignPatterns\Bridge;


/**
 * Class Abstraction
 * @package DesignPatterns\Bridge
 */
class Abstraction
{
    protected IImplementation $implementation;

    /**
     * Abstraction constructor.
     * @param IImplementation $implementation
     */
    public function __construct(IImplementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @return string
     */
    public function operation() {
        return "Abstraction: Base operation with:\n" .
            $this->implementation->operationImplementation();
    }
}