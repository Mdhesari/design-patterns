<?php

/**
 * Factory Design pattern is creational
 * 
 * As we all know that using new keyword could be harmful and impact negatively on our application so we should avoid using it too much, that's why abstract factory and factory design patterns come.
 * 
 * It's so beneficial and makes developers to debug and test their code easily.
 */

use App\Factory\Transport\Logistics\RoadLogistic;
use App\Factory\Transport\Logistics\SeaLogistic;
use App\Factory\Transport\Logistics\SkyLogistic;
use App\Factory\Transport\Transports\Boat;
use App\Factory\Transport\Transports\Trunk;
use App\Factory\Transport\Transports\Ship;

/* $trunk1 = new Trunk;

$trunk1->deliver('Tehran');

$ship1 = new Ship;

$ship1->deliver('Abadan');

$trunk2 = new Trunk;

$trunk2->deliver('Mashhad');

$ship1->deliver('France'); */

$sea = new SeaLogistic;

$road = new RoadLogistic;

$sky = new SkyLogistic;


$trunk1 = $road->newDelivery('Mazandaran');

var_dump($trunk1);

$ship1 = $sea->newDelivery('Tehran');

var_dump($ship1);

$boat1 = $sea->newDelivery('Zanjan', new Trunk);

var_dump($boat1);

$jet1 = $sky->newDelivery('Italy');

var_dump($jet1);
