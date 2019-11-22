<?php

namespace App\Factory\Transport\Logistics;

use App\Factory\Transport\Illuminate\Logistic;
use App\Factory\Transport\Transports\Jet;
use App\Factory\Transport\Illuminate\Transports\SkyInterface;

class SkyLogistic extends Logistic
{


    public function newTransport(SkyInterface $transport = null)
    {

        if (is_null($transport))
            return new Jet;

        return $transport;
    }
}
