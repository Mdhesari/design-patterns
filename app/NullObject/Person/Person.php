<?php

namespace App\NullObject\Person;

abstract class Person
{

    public $name;
    public $family;
    public $national_code;

    public function __construct(string $name, string $family, string $national_code)
    {

        $this->name = $name;
        $this->family = $family;
        $this->national_code = $national_code;
    }

    abstract public function getData();
}
