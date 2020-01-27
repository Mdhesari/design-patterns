<?php

namespace App\Iterator\Music;

use Iterator;

interface ListInterace
{

    public function getIterator(): Iterator;

    public function add();
}
