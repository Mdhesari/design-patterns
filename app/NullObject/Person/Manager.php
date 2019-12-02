<?php

namespace App\NullObject\Person;

class Manager extends Person
{

    protected $employees = [];

    public function employ(Person ...$persons)
    {

        foreach ($persons as $person) {

            echo $person->getData();

            $this->employees[] = $person;
        }
    }

    public function getData()
    {


        return "Manager [{$this->name} {$this->family}]";
    }
}
