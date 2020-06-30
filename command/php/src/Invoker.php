<?php

declare(strict_types=1);

namespace DesignPatterns\Command;


/**
 * Class Invoker
 * @package DesignPatterns\Command
 */
class Invoker
{
    /**
     * @var ICommand
     */
    private ICommand $onStart;

    /**
     * @var ICommand
     */
    private ICommand $onFinish;

    /**
     * @param ICommand $command
     */
    public function setOnStart(ICommand $command)
    {
        $this->onStart = $command;
    }

    /**
     * @param ICommand $command
     */
    public function setOnFinish(ICommand $command)
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void {
        echo "Invoker: Does anybody want something done before I begin?\n";
        if ($this->onStart instanceof ICommand) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";
        if ($this->onFinish instanceof ICommand) {
            $this->onFinish->execute();
        }
    }
}