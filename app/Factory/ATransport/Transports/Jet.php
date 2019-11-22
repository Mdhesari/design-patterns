<?php

namespace App\Factory\ATransport\Transports;

use App\Factory\ATransport\Illuminate\TransportInterface;
use App\Factory\ATransport\Illuminate\Transports\SkyInterface;

class Jet implements TransportInterface, SkyInterface
{

    public function security(): bool
    {

        return true;
    }

    public function canTakeOffBadWeather(): bool
    {

        return true;
    }

    public function deliver($place)
    {

        if (!$this->security()) {

            throw new Exception("Security Concern!");
        }

        return $place;
    }
}
