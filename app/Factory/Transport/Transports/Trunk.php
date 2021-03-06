<?php

namespace App\Factory\Transport\Transports;

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
