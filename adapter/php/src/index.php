<?php

declare(strict_types=1);

use DesignPatterns\Adapter\Adapter;
use DesignPatterns\Adapter\Target;
use DesignPatterns\Adapter\Adaptee;

require ("./../vendor/autoload.php");

/**
 * @param Target $target
 */
function clientCode(Target $target) {
    echo $target->request();
}

echo "Client: I can work just fine with the Target objects:\n";
$target = new Target;
clientCode($target);
echo "\n\n";

$adaptee = new Adaptee;
echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
echo "Adaptee: " . $adaptee->specificRequest();
echo "\n\n";

echo "Client: But I can work with it via the Adapter:\n";
$adapter = new Adapter($adaptee);
clientCode($adapter);