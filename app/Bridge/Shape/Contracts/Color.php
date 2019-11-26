<?php

namespace App\Bridge\Shape\Contracts;

abstract class Color
{

    // #ff00ff00 or white, black etc
    protected $color;

    public function getColor()
    {

        return $this->color;
    }
}
