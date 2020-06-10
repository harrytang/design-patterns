<?php

declare(strict_types=1);

use DesignPatterns\Bridge\Abstraction;
use DesignPatterns\Bridge\ConcreteImplementationB;
use DesignPatterns\Bridge\ExtendedAbstraction;

require("./../vendor/autoload.php");

/**
 * @param Abstraction $abstraction
 */
function clientCode(Abstraction $abstraction)
{
    echo $abstraction->operation();
}

$implementation = new \DesignPatterns\Bridge\ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

$implementation = new ConcreteImplementationB;
$abstraction = new ExtendedAbstraction($implementation);
clientCode($abstraction);