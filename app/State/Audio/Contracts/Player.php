<?php

namespace App\State\Audio\Contracts;

use App\State\Audio\States\Ready;

abstract class Player implements PlayerActions
{

    protected $state;

    protected $playlist = [];

    public function __construct(State $state = null, array $playlist = [])
    {

        $this->state = is_null($state) ? new Ready($this) : $state;

        $this->playlist = $playlist;
    }

    public function getPlaylist()
    {

        return $this->playlist;
    }

    public function hasPlaylist()
    {

        return count($this->playlist) > 0;
    }

    public function addToPlaylist(AudioAbstract $audio)
    {

        $this->playlist[] = $audio;

        return $this;
    }

    public function removeFromPlaylist(AudioAbstract $audio)
    {

        $this->playlist = array_filter($this->playlist, function ($child) use ($audio) {

            return $child !== $audio;
        });

        return $this;
    }

    public function resetPlaylist()
    {
        $this->playlist = [];

        return $this;
    }

    public function setState(State $state)
    {

        $this->state = $state;

        return $this;
    }

    abstract public function startPlay();

    abstract public function lockPlay();

    abstract public function nextPlay();

    abstract public function prevPlay();
}
