<?php

declare(strict_types=1);

use DesignPatterns\Command\ComplexCommand;
use DesignPatterns\Command\Invoker;
use DesignPatterns\Command\Receiver;
use DesignPatterns\Command\SimpleCommand;

require ("./../vendor/autoload.php");

$invoker = new Invoker;
$invoker->setOnStart(new SimpleCommand("Say Hi!"));

$receiver = new Receiver;
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();