<?php

namespace DesignPatterns\Builder;
/**
 * IBuilder interface
 */
interface IBuilder
{
    public function producePartA(): void;

    public function producePartB(): void;

    public function producePartC(): void;
}