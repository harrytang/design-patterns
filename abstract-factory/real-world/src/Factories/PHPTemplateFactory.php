<?php

namespace DesignPatterns\AbstractFactory\Factories;
use DesignPatterns\AbstractFactory\Templates\IPageTemplate;
use DesignPatterns\AbstractFactory\Templates\ITemplateRenderer;
use DesignPatterns\AbstractFactory\Templates\ITitleTemplate;

use DesignPatterns\AbstractFactory\Templates\PHPTemplateTitleTemplate;
use DesignPatterns\AbstractFactory\Templates\PHPTemplatePageTemplate;
use DesignPatterns\AbstractFactory\Templates\PHPTemplateRenderer;

/**
 * Class PHPTemplateFactory
 */
class PHPTemplateFactory implements ITemplateFactory
{
    /**
     * @return ITitleTemplate
     */
    public function createTitleTemplate(): ITitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    /**
     * @return IPageTemplate
     */
    public function createPageTemplate(): IPageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    /**
     * @return ITemplateRenderer
     */
    public function getRenderer(): ITemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}