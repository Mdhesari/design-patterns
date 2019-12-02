<?php


use App\Builder\Car\Car;
use App\Builder\Car\CarBuilder;
use App\Builder\Car\Company;
use App\Builder\Car\Features\Computer;
use App\Builder\Car\Features\ProEngine;
use App\Builder\Resturant\Cashier;
use App\Builder\Resturant\Chef;

// Sample 1 :

/*    $car1 = $carBuilder
    ->buildComputer(new Computer)
    ->buildSeats()
    ->build();

$car2 = $carBuilder
    ->buildSeats()
    ->buildEngine(new ProEngine)
    ->build();

*/

/* 
$company = new Company(new CarBuilder);

$car1 = $company->buildModernCar();

$car2 = $company->buildModernCar();

$car3 = $company->buildSimpleCar();

echo $car1->getInfo();

echo "____________________________________\n";

echo $car2->getInfo();

echo "_____________________________________\n";

echo $car3->getInfo();
*/

// Sample 2 

$chef = new Chef;

$cashier = new Cashier($chef);

$client1 = $cashier->specialFood();

$client2 = $cashier->burgerFood();

echo "Services : \n \n \n $client1 \n $client2";
    