<?php


use App\Iterator\Music\Music;
use App\Iterator\Music\MusicList;

$music1 = new Music("Man edame midam", "00:03:00", "Yas");
$music2 = new Music("Bande naf", "00:05:00", "Yas");
$music3 = new Music("Sefareshi", "00:06:20", "Yas");
$music4 = new Music("Namei be farzand", "00:04:30", "Yas");

$musicList = new MusicList;

$musicList->add($music1, $music2, $music3, $music4);

$iterator = $musicList->getIterator();

foreach ($iterator as $music) {

    echo $music->play() . "<br>\n";
}

var_dump(range(1, 5, 2));