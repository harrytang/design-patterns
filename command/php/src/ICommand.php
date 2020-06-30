<?php

declare(strict_types=1);

namespace DesignPatterns\Command;


/**
 * Interface ICommand
 * @package DesignPatterns\Command
 */
interface ICommand
{
    public function execute(): void;
}