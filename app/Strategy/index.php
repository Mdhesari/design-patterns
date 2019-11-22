<?php

use App\Strategy\Gateways\Mellat;
use App\Strategy\Payment;

$payment = new Payment;

$payment->setGateway(new Mellat("Buy bread."));

var_dump($payment->pay());
