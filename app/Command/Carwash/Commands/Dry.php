<?php

namespace App\Command\Carwash\Commands;

use App\Command\Carwash\Illuminate\Command;

class Dry extends Command
{

    protected $price = 5000;

    public function execute()
    {

        return 'Dried';
    }
}
