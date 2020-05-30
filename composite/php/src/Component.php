<?php

declare(strict_types=1);

namespace DesignPatterns\Composite;


/**
 * Class Component
 * @package DesignPatterns\Composite
 */
abstract class Component
{
    protected Component $parent;

    /**
     * @param Component $parent
     */
    public function setParent(Component $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Component
     */
    public function getParent(): Component
    {
        return $this->parent;
    }

    /**
     * @param Component $component
     */
    public function add(Component $component): void
    {

    }

    /**
     * @param Component $component
     */
    public function remove(Component $component): void
    {

    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    abstract public function operation(): string;
}