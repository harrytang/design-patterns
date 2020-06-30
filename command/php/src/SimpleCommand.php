<?php

declare(strict_types=1);

namespace DesignPatterns\Command;


/**
 * Class SimpleCommand
 * @package DesignPatterns\Command
 */
class SimpleCommand implements ICommand
{
    protected string $payload;

    /**
     * SimpleCommand constructor.
     * @param $payload
     */
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")\n";
    }
}