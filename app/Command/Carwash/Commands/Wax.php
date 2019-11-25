<?php

namespace App\Command\Carwash\Commands;

use App\Command\Carwash\Illuminate\Command;

class Wax extends Command
{

    protected $price = 6000;

    public function execute()
    {

        return 'Waxed ';
    }
}
