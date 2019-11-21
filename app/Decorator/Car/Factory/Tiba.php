<?php

namespace App\Decorator\Car\Factory;

use App\Decorator\Car\Illuminate\Car;

class Tiba implements Car
{

    protected $price;

    protected $description;

    public function __construct()
    {
        $this->price = 50000;
        $this->description = 'Tiba Tondro';
    }

    /**
     * get the price
     *
     * @return mixed
     */
    public function price()
    {

        return $this->price;
    }

    /**
     * set a new value to price property
     *
     * @return void
     */
    public function setPrice($price)
    {

        $this->price = $price;
    }

    /**
     * get the description
     *
     * @return mixed
     */
    public function description()
    {

        return $this->description;
    }
}
