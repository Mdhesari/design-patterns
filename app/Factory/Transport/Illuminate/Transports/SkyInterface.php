<?php

namespace App\Factory\Transport\Illuminate\Transports;

interface SkyInterface
{

    public function canTakeOffBadWeather(): bool;

    public function security(): bool;
}
