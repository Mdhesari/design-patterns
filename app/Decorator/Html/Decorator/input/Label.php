<?php

namespace App\Decorator\Html\Decorator\input;

use App\Decorator\Html\Illuminate\HTMLDecorator;

class Label extends HTMLDecorator
{

    private $label = "Label";

    public function setLabel($label)
    {

        $this->label = $label;
    }

    public function toHtml()
    {

        $forProperty = checkNullAndReturn($this->element->id, "for=\"{$this->element->id}\"");

        return "<label {$forProperty} > {$this->label} </label>" . $this->element->toHtml();
    }
}
