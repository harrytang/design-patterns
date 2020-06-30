<?php

declare(strict_types=1);

namespace DesignPatterns\Command;


/**
 * Class ComplexCommand
 * @package DesignPatterns\Command
 */
class ComplexCommand implements ICommand
{
    private Receiver $receiver;
    private string $a;
    private string $b;

    /**
     * ComplexCommand constructor.
     * @param Receiver $receiver
     * @param string $a
     * @param string $b
     */
    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): void
    {
        echo "ComplexCommand: Complex stuff should be done by a receiver object.\n";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}