<?php

namespace App\Factory\ATransport\Logistics;

use App\Factory\ATransport\Illuminate\Logistic;
use App\Factory\ATransport\Illuminate\Transports\SeaInterface;
use App\Factory\ATransport\Transports\Ship;

class SeaLogistic extends Logistic
{


    public function newTransport(SeaInterface $transport = null)
    {

        if (is_null($transport))
            return new Ship;

        return $transport;
    }
}
