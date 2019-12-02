<?php

namespace App\Builder\Car;

use App\Builder\Car\Contracts\Builder;
use App\Builder\Car\Features\Computer;
use App\Builder\Car\Features\ProEngine;
use App\Builder\Car\Features\SimpleEngine;

class Company
{

    protected $builder;

    public function __construct(Builder $builder = null)
    {

        $this->builder = is_null($builder) ? new CarBuilder : $builder;
    }

    public function buildModernCar()
    {

        $this->builder
            ->buildEngine(new ProEngine)
            ->buildComputer(new Computer)
            ->setType('modern');

        return $this->builder->build();
    }

    public function buildSimpleCar()
    {

        $this->builder
            ->buildEngine(new SimpleEngine);

        return $this->builder->build();
    }
}
