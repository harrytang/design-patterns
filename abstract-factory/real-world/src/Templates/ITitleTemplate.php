<?php

namespace DesignPatterns\AbstractFactory\Templates;
/**
 * Interface ITitleTemplate
 */
interface ITitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string;
}