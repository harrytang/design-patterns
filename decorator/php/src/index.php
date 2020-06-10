<?php

declare(strict_types=1);

require("./../vendor/autoload.php");

/**
 * client code
 * @param \DesignPatterns\Decorator\Component $component
 */
function clientCode(\DesignPatterns\Decorator\Component $component)
{
    echo $component->operation();
}

echo "Client: I've got a simple component:\n";
$simple = new \DesignPatterns\Decorator\ConcreteComponent();
clientCode($simple);

echo "\n\n";

$d1 = new \DesignPatterns\Decorator\ConcreteDecoratorA($simple);
$d2 = new \DesignPatterns\Decorator\ConcreteDecoratorB($d1);
echo "Client: Now I've got a decorated component:\n";
clientCode($d1);