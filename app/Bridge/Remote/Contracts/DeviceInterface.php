<?php

namespace App\Bridge\Remote\Contracts;

interface DeviceInterface
{

    public function powerOn();

    public function powerOff();

    public function getVolume();

    public function setVolume(int $volume);

    public function getChannel();

    public function setChannel(int $channel);

    public function isEnabled(): bool;
}
