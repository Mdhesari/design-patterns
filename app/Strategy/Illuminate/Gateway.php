<?php

namespace App\Strategy\Illuminate;

abstract class Gateway implements GatewayInterface
{

    protected $info = null;

    public function __construct($info)
    {

        $this->info = $info;
    }

    public function info($info = null)
    {

        if (is_null($info)) {

            return $this->info;
        }

        $this->info = $info;
    }

    abstract public function pay();
}
