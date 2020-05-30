<?php

declare(strict_types=1);

namespace DesignPatterns\Composite;


/**
 * Class Composite
 * @package DesignPatterns\Composite
 */
class Composite extends Component
{

    protected \SplObjectStorage $children;

    /**
     * Composite constructor.
     */
    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    /**
     * @param Component $component
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * @param Component $component
     */
    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }
        return "Branch(" . implode("+", $results) . ")";
    }
}