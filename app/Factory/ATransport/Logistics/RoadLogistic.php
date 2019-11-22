<?php

namespace App\Factory\ATransport\Logistics;

use App\Factory\ATransport\Illuminate\Logistic;
use App\Factory\ATransport\Illuminate\Transports\RoadInterface;
use App\Factory\ATransport\Transports\Trunk;

class RoadLogistic extends Logistic
{


    public function newTransport(RoadInterface $transport = null)
    {

        if (is_null($transport))
            return new Trunk;

        return $transport;
    }

   
}
