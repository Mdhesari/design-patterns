<?php

namespace App\Composite\Office\Contracts;

abstract class Person
{

    protected $coworker;

    public function setCoworker(Person $coworker)
    {

        $this->coworker = $coworker;
    }

    public function getCoworker()
    {

        return $this->coworker;
    }

    public function unsetCoworker()
    {

        $this->coworker = null;
    }

    abstract public function execute();
}
