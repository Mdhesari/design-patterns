<?php

namespace App\Iterator\Music\Iterators;

use App\Iterator\Music\MusicList;
use Iterator;

class Normal implements Iterator
{

    private $current = 0;

    private $list = [];

    public function __construct(MusicList $musics)
    {

        $this->list = $musics->getMusics();
    }

    public function current()
    {

        return $this->list[$this->current];
    }

    public function key()
    {

        return $this->current;
    }

    public function next()
    {

        $this->current += 1;
    }

    public function rewind()
    {

        $this->current = 0;
    }

    public function valid()
    {

        return $this->current < count($this->list);
    }
}
