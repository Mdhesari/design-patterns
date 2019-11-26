<?php

namespace App\Bridge\Shape\Shapes;

use App\Bridge\Shape\Contracts\Shape;

class Rectangle extends Shape
{

    protected $width = 300;

    protected $height = 100;

    public function getStyles(): string
    {

        return "";
    }
}
