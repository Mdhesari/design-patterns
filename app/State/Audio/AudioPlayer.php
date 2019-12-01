<?php

namespace App\State\Audio;

use App\State\Audio\Contracts\Player;
use App\State\Audio\States\Playing;
use App\State\Audio\States\Ready;

class AudioPlayer extends Player
{

    protected $current = 0;

    public function hasNext()
    {

        return isset($this->playlist[$this->current + 1]);
    }

    public function clickNext()
    {

        return $this->state->next();
    }

    public function clickPrevious()
    {


        return $this->state->previous();
    }

    public function clickPlay()
    {

        return $this->state->play();
    }

    public function clickLock()
    {

        return $this->state->lock();
    }

    public function startPlay()
    {

        $this->playlist[$this->current]->play();

        $this->setState(new Playing($this));

        return $this;
    }

    public function lockPlay()
    {

        $this->setState(new Ready($this));

        return $this;
    }

    public function nextPlay()
    {

        $this->current++;

        $this->startPlay();
    }

    public function prevPlay()
    {

        $this->current--;

        $this->startPlay();
    }
}
