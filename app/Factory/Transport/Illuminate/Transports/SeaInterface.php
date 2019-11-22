<?php

namespace App\Factory\Transport\Illuminate\Transports;

interface SeaInterface
{

    public function canSupportBadWeather(): bool;
}
