<?php

namespace App\Composite\Html\Elements;

use App\Composite\Html\Contracts\FieldComposite;

class FieldSet extends FieldComposite
{

    private $title = "Fieldset";

    public function setTitle($value)
    {

        $this->title = $value;

        return $this;
    }

    public function render()
    {
        $output = parent::render();

        return "
            <fieldset>
                <legend>{$this->title}</legend>
                {$output}
            </fieldset>
        ";
    }
}
