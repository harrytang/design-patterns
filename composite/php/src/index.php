<?php
declare(strict_types=1);

require ("./../vendor/autoload.php");

/**
 * @param \DesignPatterns\Composite\Component $component
 */
function clientCode(\DesignPatterns\Composite\Component $component) {
   echo $component->operation();
}

$leaf = new \DesignPatterns\Composite\Leaf();
clientCode($leaf);

$tree = new \DesignPatterns\Composite\Composite();
$b1 = new \DesignPatterns\Composite\Composite();
$b1->add(new \DesignPatterns\Composite\Leaf());
$b1->add(new \DesignPatterns\Composite\Leaf());
$tree->add($b1);

$b2 = new \DesignPatterns\Composite\Composite();
$b2->add(new \DesignPatterns\Composite\Leaf());
$tree->add($b2);

clientCode($tree);

function clientCode2(\DesignPatterns\Composite\Component $c1, \DesignPatterns\Composite\Component $c2) {
    if($c1->isComposite()) {
        $c1->add($c2);
    }
    echo "ClientCode2: ".$c1->operation();
}

clientCode2($tree, new \DesignPatterns\Composite\Leaf());