<?php

/**
 * Abstract Factory Design pattern is creational
 * 
 * As we all know that using new keyword could be harmful and impact negatively on our application so we should avoid using it too much, that's why abstract factor and factory design patterns come.
 * 
 * It's so beneficial and makes developers to debug and test their code easily.
 * 
 * ! Abstract factory is exactly like factory but the difference is that, factory is a single method, where abstract factory is an object and factory is a method that can be overriden in a subclass, the abstract factory is an object that has multiple factory methods.
 */

use App\factory\Atransport\ATransportFactory;

$transportFactory = new ATransportFactory;

$trunk = $transportFactory->newRoadTransport();

var_dump($trunk);

$ship = $transportFactory->newSeaTransport();

var_dump($ship);

$jet = $transportFactory->newSkyTransfer();

var_dump($jet);
