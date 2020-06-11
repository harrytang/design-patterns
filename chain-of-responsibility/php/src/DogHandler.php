<?php
/**
 * @author Harry Tang <harry.duong@parkman.io>
 * @link https://parkman.io
 * @copyright Copyright (c) 2020 Parkman Oy
 */

declare(strict_types=1);

namespace DesignPatterns\COR;

/**
 * Class DogHandler
 * @package DesignPatterns\COR
 */
class DogHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}