<?php

namespace App\NullObject\Person;

class NullPerson extends Person
{

    public function __construct()
    {
        parent::__construct("", "", "");
    }

    public function getData()
    {

        return "Not Available.";
    }
}
