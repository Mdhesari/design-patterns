<?php

namespace App\Composite\Html\Contracts;

abstract class Element
{

    protected $attributes = [];

    public function __call($name, $arguments)
    {

        $result = $name . '="' . join(";", $arguments) . '"';

        $this->attributes[] = $result;

        return $this;
    }

    public function getAttributes()
    {

        return join(" ", $this->attributes);
    }

    abstract public function render();
}
