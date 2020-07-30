<?php
require ("./../vendor/autoload.php");

$subject = new \DesignPatterns\Observer\Subject;

$o1 = new \DesignPatterns\Observer\ConcreteObserverA;
$subject->attach($o1);

$o2 = new \DesignPatterns\Observer\ConcreteObserverB;
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);
$subject->someBusinessLogic();
