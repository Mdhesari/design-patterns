<?php

namespace App\Composite\Office;

use App\Composite\Office\Contracts\Person;

class Employee extends Person
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function execute()
    {

        return " Employee {$this->name} ";
    }
}
