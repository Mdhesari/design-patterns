<?php

namespace App\State\Audio\Contracts;

abstract class State
{

    protected $player;

    public function __construct(Player $player)
    {

        $this->player = $player;
    }

    abstract public function next();

    abstract public function previous();

    abstract public function play();

    abstract public function lock();
}
