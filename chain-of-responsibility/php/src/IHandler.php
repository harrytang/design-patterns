<?php

declare(strict_types=1);

namespace DesignPatterns\COR;


/**
 * Interface IHandler
 * @package DesignPatterns\COR
 */
interface IHandler
{
    /**
     * @param IHandler $handler
     * @return IHandler
     */
    public function setNext(IHandler $handler): IHandler;

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string;
}