<?php

namespace DesignPatterns\AbstractFactory\Templates;

/**
 * Class TwigPageTemplate
 * @package DesignPatterns\AbstractFactory\Templates
 */
class TwigPageTemplate extends BasePageTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
HTML;
    }
}