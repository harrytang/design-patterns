<?php


namespace DesignPatterns\Builder;


/**
 * Class Director
 * @package DesignPatterns\Builder
 */
class Director
{
    /**
     * @var IBuilder
     */
    private IBuilder $builder;


    /**
     * @param IBuilder $builder
     */
    public function setBuilder(IBuilder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * build MVP product
     */
    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    /**
     * build full product
     */
    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}