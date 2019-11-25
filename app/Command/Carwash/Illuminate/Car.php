<?php

namespace App\Command\Carwash\Illuminate;

abstract class Car
{

    protected $status;

    public function __construct($status = null)
    {

        $this->status = is_null($status) ? 'Dirty ' : $status;
    }

    public function status()
    {

        return $this->status;
    }

    public function setStatus(string $status)
    {

        $this->status = $status;
    }
}
