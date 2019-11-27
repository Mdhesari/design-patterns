<?php

namespace App\Bridge\Remote\Contracts;

abstract class RemoteAbstract
{

    protected $device;

    public function __construct(DeviceInterface $device)
    {

        $this->device = $device;
    }

    public function mute()
    {

        $this->device->setVolume(0);
    }

    public function togglePower()
    {

        if ($this->device->isEnabled()) {

            return $this->device->powerOff();
        }

        return $this->device->powerOn();
    }

    public function channelUp()
    {

        $current = $this->device->getChannel();

        $this->device->setChannel(+$current++);
    }

    public function channelDown()
    {

        $current = $this->device->getChannel();

        $this->device->setChannel(+$current--);
    }

    public function volumeUp()
    {

        $volume = $this->device->getVolume() + 1;

        $this->device->setVolume($volume);

        return $volume;
    }

    public function volumeDown()
    {

        $volume = $this->device->getVolume() + 1;

        $this->device->setVolume($volume);

        return $volume;
    }
}
