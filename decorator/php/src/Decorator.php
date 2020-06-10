<?php
/**
 * @author Harry Tang <harry.duong@parkman.io>
 * @link https://parkman.io
 * @copyright Copyright (c) 2020 Parkman Oy
 */

declare(strict_types=1);

namespace DesignPatterns\Decorator;


/**
 * Class Decorator
 * @package DesignPatterns\Decorator
 */
class Decorator implements Component
{

    protected Component $component;

    /**
     * Decorator constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}