<?php

namespace App\Builder\Car\Features;

use App\Builder\Car\Contracts\Engine;
use App\Builder\Car\Contracts\Feature;

class SimpleEngine implements Feature, Engine
{

    public function info()
    {

        return "Simple Engine : Regular engine.";
    }

    public function power()
    {

        return 5;
    }
}
