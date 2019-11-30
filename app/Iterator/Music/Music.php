<?php

namespace App\Iterator\Music;

class Music
{

    private $name;

    private $album;

    private $artist;

    /** @type Hh:Mm:Ss */
    private $duration;

    public function __construct($name, $duration, $artist = "Unknown", $album = null)
    {

        $this->name = $name;
        $this->duration = $duration;
        $this->artist = $artist;
        $this->album = is_null($album) ? $this->name : $album;
    }

    public function play()
    {

        return $this->getInfo();
    }

    public function getInfo()
    {

        return " Music {$this->name} by [{$this->artist}] on [{$this->album}] - {$this->duration}";
    }
}
