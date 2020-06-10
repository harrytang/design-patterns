<?php
declare(strict_types=1);

namespace DesignPatterns\Facade;


/**
 * Class Facade
 * @package DesignPatterns\Facade
 */
class Facade
{
    protected Subsystem1 $subsystem1;

    protected Subsystem2 $subsystem2;

    /**
     * Facade constructor.
     * @param Subsystem1 $subsystem1
     * @param Subsystem2 $subsystem2
     */
    public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1;
        $this->subsystem2 = $subsystem2 ?: new Subsystem2;
    }

    /**
     * @return string
     */
    public function operation(): string {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}