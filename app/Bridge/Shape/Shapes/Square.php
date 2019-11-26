<?php

namespace App\Bridge\Shape\Shapes;

use App\Bridge\Shape\Contracts\Shape;

class Square extends Shape
{

    public function getStyles(): string
    {

        return $this->styler->height("{$this->width}px")->get();
    }
}
