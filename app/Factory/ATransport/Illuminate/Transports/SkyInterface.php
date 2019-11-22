<?php

namespace App\Factory\ATransport\Illuminate\Transports;

interface SkyInterface
{

    public function canTakeOffBadWeather(): bool;

    public function security(): bool;
}
