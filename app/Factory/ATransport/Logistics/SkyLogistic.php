<?php

namespace App\Factory\ATransport\Logistics;

use App\Factory\ATransport\Illuminate\Logistic;
use App\Factory\ATransport\Transports\Jet;
use App\Factory\ATransport\Illuminate\Transports\SkyInterface;

class SkyLogistic extends Logistic
{


    public function newTransport(SkyInterface $transport = null)
    {

        if (is_null($transport))
            return new Jet;

        return $transport;
    }
}
