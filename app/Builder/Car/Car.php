<?php

namespace App\Builder\Car;

use App\Builder\Car\Contracts\ACar;

class Car extends ACar
{

    public function getInfo()
    {

        $features = "";

        foreach ($this->features as $feature) {

            $features .= $feature->info() . PHP_EOL;
        }

        return "{$this->type} Car with Features : \n[\n{$features}].";
    }
}
