<?php

namespace App\State\Audio\States;

use App\State\Audio\Contracts\State;
use Exception;

class Playing extends State
{

    public function next()
    {

        if ($this->player->hasNext()) {

            return $this->player->nextPlay();
        }

        $this->player->lockPlay();
    }

    public function previous()
    {

        if ($this->player->hasPlaylist()) {

            return $this->player->prevPlay();
        }

        throw new Exception("No playlist.");
    }

    public function play()
    {

        $this->lock();
    }

    public function lock()
    {

        $this->player->lockPlay();
    }
}
