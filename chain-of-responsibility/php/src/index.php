<?php

declare(strict_types=1);

use DesignPatterns\COR\DogHandler;
use DesignPatterns\COR\MonkeyHandler;
use DesignPatterns\COR\SquirrelHandler;

require ("./../vendor/autoload.php");

function clientCode(\DesignPatterns\COR\IHandler $handler) {
    foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->handle($food);
        if ($result) {
            echo "  " . $result;
        } else {
            echo "  " . $food . " was left untouched.\n";
        }
    }
}

$monkey = new MonkeyHandler;
$squirrel = new SquirrelHandler;
$dog = new DogHandler;

$monkey->setNext($squirrel)->setNext($dog);

clientCode($monkey);

clientCode($squirrel);