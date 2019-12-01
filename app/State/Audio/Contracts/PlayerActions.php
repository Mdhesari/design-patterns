<?php

namespace App\State\Audio\Contracts;

interface PlayerActions
{

    public function startPlay();

    public function lockPlay();

    public function nextPlay();

    public function prevPlay();
}
