<?php

namespace App\Builder\Car\Features;

use App\Builder\Car\Contracts\Engine;
use App\Builder\Car\Contracts\Feature;

class ProEngine implements Feature, Engine
{

    public function info()
    {

        return "Pro Engine : Excellent engine.";
    }

    public function power()
    {

        return 8;
    }
}
