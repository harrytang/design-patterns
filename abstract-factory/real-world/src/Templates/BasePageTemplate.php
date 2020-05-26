<?php


namespace DesignPatterns\AbstractFactory\Templates;


/**
 * Class BasePageTemplate
 * @package DesignPatterns\AbstractFactory\Templates
 */
abstract class BasePageTemplate implements IPageTemplate
{
    protected $titleTemplate;

    /**
     * BasePageTemplate constructor.
     * @param ITitleTemplate $titleTemplate
     */
    public function __construct(ITitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}