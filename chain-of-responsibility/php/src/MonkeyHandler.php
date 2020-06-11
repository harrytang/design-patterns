<?php

declare(strict_types=1);

namespace DesignPatterns\COR;

/**
 * Class MonkeyHandler
 * @package DesignPatterns\COR
 */
class MonkeyHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}