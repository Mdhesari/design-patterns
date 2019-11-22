<?php

namespace App\Factory\ATransport\Illuminate;

abstract class Logistic implements LogisticInterface
{

    abstract public function newTransport();

    public function newDelivery($place, TransportInterface $transport = null)
    {

        $ship = $this->newTransport($transport);

        $ship->deliver($place);

        return $ship;
    }
}
