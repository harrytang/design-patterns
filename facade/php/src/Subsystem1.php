<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;


/**
 * Class Subsystem1
 * @package DesignPatterns\Facade
 */
class Subsystem1
{
    /**
     * @return string
     */
    public function operation1(): string
    {
        return "Subsystem1: Ready!\n";
    }

    // ...

    /**
     * @return string
     */
    public function operationN(): string
    {
        return "Subsystem1: Go!\n";
    }
}