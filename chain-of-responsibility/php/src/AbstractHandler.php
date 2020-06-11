<?php

declare(strict_types=1);

namespace DesignPatterns\COR;


/**
 * Class AbstractHandler
 * @package DesignPatterns\COR
 */
abstract class AbstractHandler implements IHandler
{
    /**
     * @var IHandler
     */
    private IHandler $nextHandler;

    /**
     * @param IHandler $handler
     * @return IHandler
     */
    public function setNext(IHandler $handler): IHandler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}