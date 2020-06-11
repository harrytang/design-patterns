<?php
/**
 * @author Harry Tang <harry.duong@parkman.io>
 * @link https://parkman.io
 * @copyright Copyright (c) 2020 Parkman Oy
 */

declare(strict_types=1);

namespace DesignPatterns\COR;

/**
 * Class SquirrelHandler
 * @package DesignPatterns\COR
 */
class SquirrelHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Squirrel: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}