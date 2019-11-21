<?php

namespace App\Decorator\Car\Factory\Features;

use App\Decorator\Car\Illuminate\Decorator;

class Sunroof extends Decorator
{

    public function price()
    {

        return $this->car->price() + 5000;
    }

    public function description()
    {

        return $this->car->description() . " ,Sunroof";
    }
}
