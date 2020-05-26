<?php

namespace DesignPatterns\AbstractFactory\Templates;

/**
 * Class PHPTemplateTitleTemplate
 */
class PHPTemplateTitleTemplate implements ITitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}