<?php

declare(strict_types=1);

namespace DesignPatterns\Proxy;


/**
 * Class RealSubject
 * @package DesignPatterns\Proxy
 */
class RealSubject implements Subject
{

    /**
     * @inheritDoc
     */
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}