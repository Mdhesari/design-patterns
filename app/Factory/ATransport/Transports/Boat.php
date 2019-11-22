<?php

namespace App\Factory\ATransport\Transports;

use App\Factory\ATransport\Illuminate\TransportInterface;
use App\Factory\ATransport\Illuminate\Transports\SeaInterface;

class Boat implements TransportInterface, SeaInterface
{

    public function deliver($place)
    {

        return $place;
    }

    public function canSupportBadWeather(): bool
    {

        return false;
    }
}
