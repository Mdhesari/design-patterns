<?php

use App\State\Audio\AudioPlayer;
use App\State\Audio\Song;

/**
 * Load application bootstraper and autoloads
 */

$player = new AudioPlayer();

$yas = new Song("Sefareshi", "5min", "yas", "beautiful rap.");
$hossein = new Song("12 be bad", "4min", "Hossein", "amazing rap.");

$player->addToPlaylist($yas);
$player->addToPlaylist($hossein);

$player->clickPlay();
$player->clickNext();
