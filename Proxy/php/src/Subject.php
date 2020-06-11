<?php

declare(strict_types=1);

namespace DesignPatterns\Proxy;


/**
 * Interface Subject
 * @package DesignPatterns\Proxy
 */
interface Subject
{
    /**
     * request
     */
    public function request(): void;
}