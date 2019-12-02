<?php

namespace App\Builder\Car\Contracts;

interface Builder
{

    public function reset();

    public function buildSeats();

    public function buildEngine(Engine $engine);

    public function buildComputer(Device $device);

    public function build(): ACar;
}
