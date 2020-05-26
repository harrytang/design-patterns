<?php

namespace DesignPatterns\AbstractFactory\Templates;
/**
 * Class TwigTitleTemplate
 */
class TwigTitleTemplate implements ITitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}