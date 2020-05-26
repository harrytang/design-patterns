<?php


namespace DesignPatterns\FactoryMethod;


/**
 * Interface IProduct
 * @package DesignPatterns\FactoryMethod
 */
interface IProduct
{
    /**
     * @return string
     */
    public function operation(): string;
}