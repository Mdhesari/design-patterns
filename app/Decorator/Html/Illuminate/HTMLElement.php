<?php

namespace App\Decorator\Html\Illuminate;

abstract class HTMLElement
{

    protected $id = null;

    public function __construct($id = null)
    {

        $this->id = $id;
    }

    public function getId()
    {

        return $this->id;
    }
}
