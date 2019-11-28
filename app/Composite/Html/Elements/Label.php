<?php

namespace App\Composite\Html\Elements;

use App\Composite\Html\Contracts\Element;

class Label extends Element
{

    private $label = "Label";

    public function setLabel($value)
    {

        $this->label = $value;

        return $this;
    }

    public function render()
    {

        return "
            <label {$this->getAttributes()}>
                {$this->label}
            </label>
        ";
    }
}
