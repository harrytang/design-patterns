<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter;


/**
 * Class Target
 * @package DesignPatterns\Adaptor
 */
class Target
{
    /**
     * @return string
     */
    public function request(): string
    {
        return "Target: the default target's behavior.";
    }
}