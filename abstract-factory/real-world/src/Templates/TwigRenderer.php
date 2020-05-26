<?php

namespace DesignPatterns\AbstractFactory\Templates;


use Twig\Loader\ArrayLoader;

/**
 * Class TwigRenderer
 * @package DesignPatterns\AbstractFactory\Templates
 */
class TwigRenderer implements ITemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    public function render(string $templateString, array $arguments = []): string
    {
        $env = new \Twig\Environment(new ArrayLoader());
        $template = $env->createTemplate($templateString);
        return $template->render($arguments);
    }
}