<?php

declare(strict_types=1);

namespace DesignPatterns\Bridge;


/**
 * Interface IImplementation
 * @package DesignPatterns\Bridge
 */
interface IImplementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string;
}