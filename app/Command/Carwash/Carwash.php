<?php

namespace App\Command\Carwash;

use App\Command\Carwash\Illuminate\Car;
use App\Command\Carwash\Illuminate\Command;

/**
 * 
 * Invoker
 * 
 */

class CarWash
{

    protected $customers = [];

    protected $completed = [];

    public function registerCustomer(Car $car, Command ...$tasks)
    {
        $customerKey = uniqid("carwash_");
        foreach ($tasks as $task) {

            $task->setCar($car);
        }

        $this->customers[$customerKey] = $tasks;
    }

    public function wash()
    {

        foreach ($this->customers as $name => $customer) {

            $status = [];

            foreach ($customer as $task) {

                $status[] = $task->execute();
            }

            $task->car()->setStatus(join(" ", $status));

            $this->completed[] = $name;
        }
    }
}
