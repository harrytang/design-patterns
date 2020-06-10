<?php

declare(strict_types=1);

namespace DesignPatterns\Bridge;


/**
 * Class ExtendedAbstraction
 * @package DesignPatterns\Bridge
 */
class ExtendedAbstraction extends Abstraction
{
    /**
     * @return string
     */
    public function operation()
    {
        return "ExtendedAbstraction: Extended operation with:\n" .
            $this->implementation->operationImplementation();
    }
}