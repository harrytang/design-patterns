<?php


namespace DesignPatterns\AbstractFactory\Templates;


/**
 * Interface ITemplateRenderer
 * @package DesignPatterns\AbstractFactory\Templates
 */
interface ITemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string;
}