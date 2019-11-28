<?php

namespace App\Composite\Html\Elements;

use App\Composite\Html\Contracts\FormElement;

class Input extends FormElement
{

    private $type = "text";

    protected $label = "";

    public function addLabel(Label $label)
    {

        $this->label = $label->render();

        return $this;
    }

    public function getLabel()
    {

        return $this->label;
    }

    public function type($value = null)
    {

        if ($value === null) {

            return $this->type;
        }

        $this->type = $value;

        return $this;
    }

    public function render()
    {

        $attributes = $this->getAttributes();

        return "
            {$this->label}<input type=\"{$this->type}\" {$attributes} />
        ";
    }
}
