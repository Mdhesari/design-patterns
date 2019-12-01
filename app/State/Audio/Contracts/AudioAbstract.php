<?php

namespace App\State\Audio\Contracts;

abstract class AudioAbstract
{

    protected $name;

    protected $duration;

    protected $description = "";

    public function __construct($name, $duration, $description = "")
    {

        $this->name = $name;

        $this->duration = $duration;

        $this->description = $description;
    }

    abstract public function play();
}
