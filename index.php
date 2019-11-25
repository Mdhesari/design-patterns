<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Command\Carwash\Cars\BMW;
use App\Command\Carwash\CarWash;
use App\Command\Carwash\Commands\Dry;
use App\Command\Carwash\Commands\SimpleWash;

$carwash = new CarWash;

$car1 = new BMW;

echo $car1->status() . PHP_EOL;

$carwash->registerCustomer(
    $car1,
    new SimpleWash,
    new Dry,
);

$carwash->wash();

echo $car1->status();
