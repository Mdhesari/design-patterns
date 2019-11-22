<?php

namespace App\Strategy\Gateways;

use App\Strategy\Illuminate\Gateway;

class Zarinpal extends Gateway
{

    public function pay()
    {

        return true;
    }
}
