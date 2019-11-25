<?php

namespace App\Command\Carwash\Commands;

use App\Command\Carwash\Illuminate\Command;

class SystemReset extends Command
{

    protected $price = 8000;

    public function execute()
    {
       
        return 'System Reseted ';
    }
}
