<?php

namespace App\Iterator\Music;

interface ListInterace
{

    public function getIterator(): Iterator;

    public function add();
}
