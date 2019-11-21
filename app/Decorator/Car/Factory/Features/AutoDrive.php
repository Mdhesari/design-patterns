<?php

namespace App\Decorator\Car\Factory\Features;

use App\Decorator\Car\Illuminate\Decorator;

class AutoDrive extends Decorator
{

    public function price()
    {

        return $this->car->price() + 20000;
    }

    public function description()
    {

        return $this->car->description() . " ,AutoDrive modern";
    }
}
