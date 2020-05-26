<?php

namespace DesignPatterns\AbstractFactory\Factories;
use DesignPatterns\AbstractFactory\Templates\IPageTemplate;
use DesignPatterns\AbstractFactory\Templates\ITemplateRenderer;
use DesignPatterns\AbstractFactory\Templates\ITitleTemplate;

/**
 * Interface ITemplateFactory
 */
interface ITemplateFactory
{
    /**
     * @return ITitleTemplate
     */
    public function createTitleTemplate(): ITitleTemplate;

    /**
     * @return IPageTemplate
     */
    public function createPageTemplate(): IPageTemplate;

    /**
     * @return ITemplateRenderer
     */
    public function getRenderer(): ITemplateRenderer;
}