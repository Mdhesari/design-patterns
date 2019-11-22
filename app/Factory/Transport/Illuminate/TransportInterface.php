<?php 

namespace App\Factory\Transport\Illuminate;

interface TransportInterface {

    public function deliver($place);
}