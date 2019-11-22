<?php

namespace App\Factory\Transport\Logistics;

use App\Factory\Transport\Illuminate\Logistic;
use App\Factory\Transport\Illuminate\Transports\SeaInterface;
use App\Factory\Transport\Transports\Ship;

class SeaLogistic extends Logistic
{


    public function newTransport(SeaInterface $transport = null)
    {

        if (is_null($transport))
            return new Ship;

        return $transport;
    }
}
