<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter;


/**
 * Class Adaptee
 * @package DesignPatterns\Adapter
 */
class Adaptee
{
    /**
     * @return string
     */
    public function specificRequest(): string {
        return ".eetpadA eht fo roivaheb laicepS";
    }
}