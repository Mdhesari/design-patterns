<?php

namespace App\Factory\Transport\Transports;

use App\Factory\Transport\Illuminate\TransportInterface;
use App\Factory\Transport\Illuminate\Transports\SkyInterface;

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
