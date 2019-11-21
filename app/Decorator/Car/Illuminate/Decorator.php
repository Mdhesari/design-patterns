<?php

namespace App\Decorator\Car\Illuminate;

abstract class Decorator implements Car
{

    protected $car;

    public function __construct(Car $car)
    {

        $this->car = $car;
    }

    /**
     * get the price
     *
     * @return mixed
     */
    abstract public function price();

    /**
     * get the description
     *
     * @return mixed
     */
    abstract public function description();

}
