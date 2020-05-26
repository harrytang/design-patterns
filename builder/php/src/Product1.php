<?php

namespace DesignPatterns\Builder;


/**
 * Class Product1
 * @package DesignPatterns\Builder
 */
class Product1
{
    public array $parts = [];

    /**
     * list parts
     */
    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}