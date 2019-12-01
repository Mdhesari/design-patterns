<?php

namespace App\State\Audio\States;

use App\State\Audio\Contracts\State;
use Exception;

class Ready extends State
{

    public function next()
    {

        if ($this->player->hasPlaylist()) {

            $this->player->startPlay();

            return $this->player->setState(new Playing($this->player));
        }

        throw new Exception("There is nothing to play!");
    }

    public function previous()
    {

        if ($this->player->hasPlaylist()) {

            $playlist = $this->player->getPlaylist();

            $playlist[count($playlist) - 1]->play();

            return $this->player->setState(new Playing($this->player));
        }

        throw new Exception("There is nothing to play!");
    }

    public function play()
    {

        $this->player->startPlay();

    }

    public function lock()
    {

        throw new Exception("Already is Locked!");
    }
}
