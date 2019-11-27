<?php

namespace App\Template;

abstract class Game
{

    protected $status = false;

    public final function start()
    {

        $this->status = true;
    }

    public final function end()
    {

        $this->status = false;
        die;
    }

    public function buildUnits()
    {

        return "Units";
    }
}
