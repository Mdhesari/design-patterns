<?php


/**
 * 
 * this code should be on root of the program
 * 
 */

use App\Decorator\Car\Factory\Features\AutoDrive;
use App\Decorator\Car\Factory\Features\Sunroof;
use App\Decorator\Car\Factory\Tiba;

$tiba1 = new Tiba;

$tiba1 = new Sunroof($tiba1);

$tiba1 = new AutoDrive($tiba1);

echo $tiba1->description() . ' | Price : ' . $tiba1->price();
