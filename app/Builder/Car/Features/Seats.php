<?php

namespace App\Builder\Car\Features;

use App\Builder\Car\Contracts\Feature;

class Seats implements Feature
{

    public function info()
    {

        return "Seats for car";
    }
}
