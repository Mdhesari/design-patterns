<?php

namespace App\Builder\Resturant;

use App\Builder\Resturant\Contracts\Maker;

class Chef implements Maker
{

    protected $order = [];

    public function makeBurger()
    {
        $this->order[] = "hamburger";

        return $this;
    }

    public function  makePizza()
    {
        $this->order[] = "pizza";

        return $this;
    }

    public function makeSalad()
    {
        $this->order[] = "salad";

        return $this;
    }

    public function make()
    {

        return "Ready : " . join(" ,", $this->order);
    }

    public function reset()
    {

        $this->order = [];

        return $this;
    }
}
