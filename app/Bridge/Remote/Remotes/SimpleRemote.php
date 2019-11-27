<?php

namespace App\Bridge\Remote\Remotes;

use App\Bridge\Remote\Contracts\RemoteAbstract;

class SimpleRemote extends RemoteAbstract
{

    public function channel(int $ch)
    {

        $this->device->setChannel($ch);
    }
}
