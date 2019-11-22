<?php

namespace App\Strategy\Gateways;

use App\Strategy\Illuminate\Gateway;
use Exception;

class Mellat extends Gateway
{

    public function pay()
    {

        if (is_null($this->info())) {

            throw new Exception("Payment info is not defined, it is not valid for mellat bank.");
        }

        return true;
    }
}
