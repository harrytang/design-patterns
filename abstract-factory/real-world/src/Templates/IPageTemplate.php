<?php


namespace DesignPatterns\AbstractFactory\Templates;


/**
 * Interface IPageTemplate
 * @package DesignPatterns\AbstractFactory\Templates
 */
interface IPageTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string;
}