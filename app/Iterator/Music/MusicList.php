<?php

namespace App\Iterator\Music;

use App\Iterator\Music\Iterators\Normal;
use Iterator;

class MusicList implements ListInterace
{

    protected $musics = [];

    public function add(Music ...$musics)
    {

        $this->musics = array_merge($this->musics, $musics);
    }

    public function getMusics()
    {

        return $this->musics;
    }

    public function getIterator(): Iterator
    {

        return new Normal($this);
    }
}
