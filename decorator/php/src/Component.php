<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;


/**
 * Interface Component
 * @package DesignPatterns\Decorator
 */
interface Component
{
    /**
     * @return string
     */
    public function operation(): string;
}