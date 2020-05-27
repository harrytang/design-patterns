<?php

declare(strict_types=1);

namespace DesignPatterns\Prototype;

/**
 * Class ComponentWithBackReference
 * @package DesignPatterns\Prototype
 */
class ComponentWithBackReference
{
    public Prototype $prototype;

    /**
     * Note that the constructor won't be executed during cloning. If you have
     * complex logic inside the constructor, you may need to execute it in the
     * `__clone` method as well.
     * @param Prototype $prototype
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}