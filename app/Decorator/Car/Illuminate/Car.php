<?php

namespace App\Decorator\Car\Illuminate;

interface Car
{

    /**
     * get the price
     *
     * @return mixed
     */
    public function price();

    /**
     * get the description
     *
     * @return mixed
     */
    public function description();

}
