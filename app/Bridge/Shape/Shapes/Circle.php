<?php

namespace App\Bridge\Shape\Shapes;

use App\Bridge\Shape\Contracts\Shape;

class Circle extends Shape
{

    protected $radius = "50%";



    public function getStyles(): string
    {

        return $this->styler->add("border-radius:{$this->radius}")->get();
    }
}
