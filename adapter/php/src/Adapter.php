<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter;


use DesignPatterns\Adapter\Adaptee;

/**
 * Class Adapter
 * @package DesignPatterns\Adaptor
 */
class Adapter extends Target
{
    private $adaptee;

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @return string
     */
    public function request(): string
    {

        return "Apaptor: (translated) ".strrev($this->adaptee->specificRequest());
    }
}