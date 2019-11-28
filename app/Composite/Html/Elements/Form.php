<?php

namespace App\Composite\Html\Elements;

use App\Composite\Html\Contracts\FieldComposite;

class Form extends FieldComposite
{

    private $url = "";

    private $type = "post";

    public function type($value = null)
    {

        if ($value === null) {

            return $this->type;
        }

        $this->type = $value;

        return $this;
    }

    public function url($value = null)
    {

        if ($value === null) {

            return $this->url;
        }

        $this->url = $value;

        return $this;
    }

    public function render()
    {

        $output = parent::render();

        return "
            <form type=\"{$this->type}\" action=\"{$this->url}\">
                {$output}
            </form>
        ";
    }
}
