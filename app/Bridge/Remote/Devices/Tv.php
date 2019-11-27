<?php

namespace App\Bridge\Remote\Devices;

use App\Bridge\Remote\Contracts\DeviceInterface;

class Tv implements DeviceInterface
{

    private $status = false;

    /** min 0 and max 100 */
    private $volume = 50;

    private $channel = 1;

    public function powerOn()
    {

        $this->status = true;
    }

    public function powerOff()
    {

        $this->status = true;
    }

    public function getVolume()
    {

        return $this->volume;
    }

    public function setVolume(int $volume)
    {

        if ($volume < 0) {

            $this->volume = 0;
        } else if ($volume > 100) {

            $this->volume = 100;
        } else {

            $this->volume = $volume;
        }

        return $this;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel(int $channel)
    {
        return $this->channel = $channel;
    }

    public function isEnabled(): bool
    {

        return $this->status;
    }
}
