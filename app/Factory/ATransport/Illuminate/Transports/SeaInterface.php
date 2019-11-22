<?php

namespace App\Factory\ATransport\Illuminate\Transports;

interface SeaInterface
{

    public function canSupportBadWeather(): bool;
}
