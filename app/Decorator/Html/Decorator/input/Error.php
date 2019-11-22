<?php

namespace App\Decorator\Html\Decorator\input;

use App\Decorator\Html\Illuminate\HTMLDecorator;

class Error extends HTMLDecorator
{

    private $error = '';

    public function setError($error = '')
    {

        $this->error = $error;
    }

    public function toHtml()
    {

        $id = checkNullAndReturn($this->id, "id=\"{$this->id}\"");

        $style = 'style="color:red;"';

        return "<p {$id} {$style} >{$this->error}</p>" . $this->element->toHtml();
    }
}
