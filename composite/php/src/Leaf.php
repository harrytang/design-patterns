<?php

declare(strict_types=1);

namespace DesignPatterns\Composite;


/**
 * Class Leaf
 * @package DesignPatterns\Composite
 */
class Leaf extends Component
{

    /**
     * @inheritDoc
     */
    public function operation(): string
    {
        return "Leaf";
    }
}