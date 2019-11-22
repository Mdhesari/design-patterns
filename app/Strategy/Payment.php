<?php

namespace App\Strategy;

use App\Strategy\Illuminate\GatewayInterface;
use Exception;

class Payment
{

    protected $gateway = null;

    public function setGateway(GatewayInterface $gateway)
    {

        $this->gateway = $gateway;
    }

    public function pay()
    {

        if (is_null($this->gateway)) {

            throw new Exception('The payment gateway is null!!!!!');
        }

        $this->gateway->pay();

        return $this->gateway->info();
    }
}
