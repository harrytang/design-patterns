<?php

declare(strict_types=1);

namespace DesignPatterns\Singleton;


/**
 * Class Singleton
 * @package DesginPaterns\Singleton
 */
class Singleton
{
    public static $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    protected function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return mixed
     */
    public static function getInstance() {
        $cls = static::class;
        if(!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }
        return self::$instances[$cls];
    }

}