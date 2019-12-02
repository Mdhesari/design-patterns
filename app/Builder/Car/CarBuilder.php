<?php

namespace App\Builder\Car;

use App\Builder\Car\Contracts\ACar;
use App\Builder\Car\Contracts\Builder;
use App\Builder\Car\Contracts\Device;
use App\Builder\Car\Contracts\Engine;
use App\Builder\Car\Features\Seats;

class CarBuilder implements Builder
{

    protected $car;

    public function __construct()
    {

        $this->reset();
    }

    public function reset()
    {

        $this->car = new Car;
    }

    public function getInfo()
    {

        return "Simple Car.";
    }

    public function buildSeats()
    {

        $this->car->addFeatures(new Seats);

        return $this;
    }

    public function buildEngine(Engine $engine)
    {

        $this->car->addFeatures($engine);

        return $this;
    }

    public function buildComputer(Device $device)
    {

        $this->car->addFeatures($device);

        return $this;
    }

    public function build(): ACar
    {

        $car = $this->car;

        $this->reset();

        return $car;
    }

    public function __call($name, $arguments)
    {

        return \call_user_func_array([$this->car, $name], $arguments);
    }
}
