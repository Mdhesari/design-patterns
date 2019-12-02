<?php

namespace App\Builder\Car\Features;

use App\Builder\Car\Contracts\Device;
use App\Builder\Car\Contracts\Feature;

class Computer implements Feature, Device
{

    public function info()
    {

        return "Computer : Very nice screen and cpu.";
    }

    public function isSmart()
    {

        return true;
    }
}
