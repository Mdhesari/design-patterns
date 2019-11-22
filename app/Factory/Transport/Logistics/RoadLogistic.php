<?php

namespace App\Factory\Transport\Logistics;

use App\Factory\Transport\Illuminate\Logistic;
use App\Factory\Transport\Illuminate\Transports\RoadInterface;
use App\Factory\Transport\Transports\Trunk;

class RoadLogistic extends Logistic
{


    public function newTransport(RoadInterface $transport = null)
    {

        if (is_null($transport))
            return new Trunk;

        return $transport;
    }

   
}
