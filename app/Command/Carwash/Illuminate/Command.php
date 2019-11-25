<?php

namespace App\Command\Carwash\Illuminate;

abstract class Command
{

    protected $car = null;

    protected $price = 0;

    protected $priceCurrency = 'Toman';

    public function __construct(Car $car = null)
    {

        $this->car = $car;
    }

    public function car()
    {

        return $this->car;
    }

    public function setCar(Car $car)
    {

        if (is_null($this->car)) {
            $this->car = $car;
        }
    }

    public function setPrice($price)
    {

        $this->price = $price;
    }

    abstract public function execute();
}
