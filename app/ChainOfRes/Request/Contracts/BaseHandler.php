<?php

namespace App\ChainOfRes\Request\Contracts;

use App\ChainOfRes\Request\Handlers\NullHandler;

abstract class BaseHandler implements Handler
{

    protected $nextHandler;

    public function setNext(Handler $nextHandler)
    {

        $this->nextHandler = $nextHandler;

        return $nextHandler;
    }

    public function handle($request)
    {

        var_dump('Proceed on ' . __METHOD__);

        if ($this->nextHandler) {

            return $this->nextHandler->handle($request);
        }

        return (new NullHandler)->handle($request);
    }
}
