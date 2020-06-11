<?php

declare(strict_types=1);

namespace DesignPatterns\Proxy;


/**
 * Class Proxy
 * @package DesignPatterns\Proxy
 */
class Proxy implements Subject
{
    private Subject $realSubject;

    /**
     * Proxy constructor.
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->realSubject = $subject;
    }

    /**
     * @inheritDoc
     */
    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    /**
     * @return bool
     */
    private function checkAccess(): bool
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;
    }

    /**
     *
     */
    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";
    }
}