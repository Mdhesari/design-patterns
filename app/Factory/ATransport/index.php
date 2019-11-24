<?php


use App\factory\Atransport\ATransportFactory;

$transportFactory = new ATransportFactory;

$trunk = $transportFactory->newRoadTransport();

var_dump($trunk);

$ship = $transportFactory->newSeaTransport();

var_dump($ship);

$jet = $transportFactory->newSkyTransfer();

var_dump($jet);
