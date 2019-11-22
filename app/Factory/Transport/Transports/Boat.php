<?php

namespace App\Factory\Transport\Transports;

use App\Factory\Transport\Illuminate\TransportInterface;
use App\Factory\Transport\Illuminate\Transports\SeaInterface;

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
