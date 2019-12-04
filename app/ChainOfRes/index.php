<?php

use App\ChainOfRes\Request\Handlers\AuthHandler;
use App\ChainOfRes\Request\Handlers\IPHandler;

$request = [
    'ip' => '192.168.1.4'
];

$auth = new AuthHandler;

$ip = new IPHandler;

$auth->setNext($ip);

$auth->handle($request);
