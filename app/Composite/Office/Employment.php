<?php

namespace App\Composite\Office;

use App\Composite\Office\Contracts\Recruitment;
use App\Composite\Office\Coworker;
use App\Composite\Office\Employee;

class Employment implements Recruitment
{


    public function newEmploy($data = [])
    {
        if (!$this->isValid()) {

            return false;
        }

        return new Employee($data['name']);
    }

    public function newCoworker($data = [])
    {

        if (!$this->isValid()) {

            return false;
        }

        return new Coworker($data['title']);
    }

    public function isValid()
    {

        return true;
    }
}
