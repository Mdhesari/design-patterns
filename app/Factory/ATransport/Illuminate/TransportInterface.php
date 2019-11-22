<?php 

namespace App\Factory\ATransport\Illuminate;

interface TransportInterface {

    public function deliver($place);
}