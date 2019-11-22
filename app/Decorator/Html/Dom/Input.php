<?php

namespace App\Decorator\Html\Dom;

use App\Decorator\Html\Illuminate\HTMLDomInterface;
use App\Decorator\Html\Illuminate\HTMLElement;

class Input extends HTMLElement implements HTMLDomInterface
{

    protected $name = null;

    public function __construct($id = null, $name = null)
    {
        parent::__construct($id);

        if (!is_null($id) && is_null($name)) {

            $this->name = $id;
        } else if (!is_null($name)) {

            $this->name = $name;
        }
    }

    public function getName()
    {

        return $this->name;
    }

    public function setName($name)
    {

        return $this->name = $name;
    }

    public function toHtml()
    {

        $name = checkNullAndReturn($this->name, "name=\"{$this->name}\"");

        $id = checkNullAndReturn($this->id, "id=\"{$this->id}\"");

        return "
            <input type=\"text\" {$name} {$id}>
        ";
    }
}
