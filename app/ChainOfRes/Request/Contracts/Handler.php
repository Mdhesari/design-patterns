<?php

namespace App\ChainOfRes\Request\Contracts;

interface Handler
{

    public function setNext(Handler $handler);

    public function handle($request);
}
