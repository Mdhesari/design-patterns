<?php

namespace App\Builder\Resturant;

use App\Builder\Resturant\Contracts\Maker;

class Cashier
{

    protected $chef;

    public function __construct(Maker $maker)
    {
        $this->chef = $maker;
    }

    public function specialFood()
    {

        $this->chef
            ->makeBurger()
            ->makeSalad();

        return $this->deliver();
    }

    public function burgerFood()
    {

        $this->chef->makeBurger();

        return $this->deliver();
    }

    public function deliver()
    {

        $order = $this->chef->make();

        $this->chef->reset();

        return $order;
    }
}
