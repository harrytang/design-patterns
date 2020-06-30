<?php

declare(strict_types=1);

namespace DesignPatterns\Command;


/**
 * Class Receiver
 * @package DesignPatterns\Command
 */
class Receiver
{
    /**
     * @param string $a
     */
    public function doSomething(string $a): void
    {
        echo "Receiver: Working on (" . $a . ".)\n";
    }

    /**
     * @param string $b
     */
    public function doSomethingElse(string $b): void
    {
        echo "Receiver: Also working on (" . $b . ".)\n";
    }
}