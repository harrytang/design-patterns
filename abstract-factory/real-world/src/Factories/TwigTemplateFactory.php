<?php

namespace DesignPatterns\AbstractFactory\Factories;

use DesignPatterns\AbstractFactory\Templates\IPageTemplate;
use DesignPatterns\AbstractFactory\Templates\ITemplateRenderer;
use DesignPatterns\AbstractFactory\Templates\ITitleTemplate;
use DesignPatterns\AbstractFactory\Templates\TwigTitleTemplate;
use DesignPatterns\AbstractFactory\Templates\TwigPageTemplate;
use DesignPatterns\AbstractFactory\Templates\TwigRenderer;

/**
 * Class TwigTemplateFactory
 */
class TwigTemplateFactory implements ITemplateFactory
{
    /**
     * @return ITitleTemplate
     */
    public function createTitleTemplate(): ITitleTemplate
    {
        return new TwigTitleTemplate;
    }

    /**
     * @return IPageTemplate
     */
    public function createPageTemplate(): IPageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    /**
     * @return ITemplateRenderer
     */
    public function getRenderer(): ITemplateRenderer
    {
        return new TwigRenderer();
    }
}