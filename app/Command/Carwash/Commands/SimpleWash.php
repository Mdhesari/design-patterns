<?php

namespace App\Command\Carwash\Commands;

use App\Command\Carwash\Illuminate\Command;

class SimpleWash extends Command
{

    protected $price = 10000;

    public function execute()
    {

        return 'Washed ';
    }
}
