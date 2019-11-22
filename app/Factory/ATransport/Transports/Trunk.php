<?php

namespace App\Factory\ATransport\Transports;

use App\Factory\Transport\Illuminate\TransportInterface;
use App\Factory\Transport\Illuminate\Transports\RoadInterface;

class Trunk implements TransportInterface, RoadInterface
{

    public function deliver($place)
    {

        return $place;
    }

    public function badRoadSecure(): bool
    {

        return true;
    }
}
