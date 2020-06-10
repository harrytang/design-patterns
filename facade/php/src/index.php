<?php

declare(strict_types=1);

require ("./../vendor/autoload.php");

function clientCode(\DesignPatterns\Facade\Facade $facade) {
    echo $facade->operation();
}

$facade = new \DesignPatterns\Facade\Facade();
clientCode($facade);