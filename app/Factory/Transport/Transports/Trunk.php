<?php

namespace App\Factory\Transport\Transports;

use App\Factory\Transport\Illuminate\TransportInterface;

class Trunk implements TransportInterface {

    public function deliver($place)
    {
        
        return $place;
    }
}