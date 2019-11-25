<?php

/* use App\Command\Carwash\Cars\BMW;
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

echo $car1->status(); */

use App\Command\Message\Drivers\Email;
use App\Command\Message\Drivers\Sms;
use App\Command\Message\Messager;

$messager = new Messager;

/**
 * 
 * Using Command Design pattern like this ex :
 * 
 * new Email,
 * new Sms,
 * new Class... 
 * 
 * these are stroing as commands in order to execute in a right time.
 * 
 */
$messager->addMessage(
    new Email("Wow look at this!", "this is amazing. ", "mdhesari99@gmail.com"),
    new Sms("Hi there", "my name is ali", '09380038157'),
);

$messager->send();
