<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;


/**
 * Class Subsystem2
 * @package DesignPatterns\Facade
 */
class Subsystem2
{
    /**
     * @return string
     */
    public function operation1(): string
    {
        return "Subsystem2: Get ready!\n";
    }

    // ...

    /**
     * @return string
     */
    public function operationZ(): string
    {
        return "Subsystem2: Fire!\n";
    }
}