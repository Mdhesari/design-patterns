<?php

namespace App\ChainOfRes\Request\Handlers;

use App\ChainOfRes\Request\Contracts\BaseHandler;

class NullHandler extends BaseHandler
{

    public function handle($request)
    {

        var_dump($request);
    }
}
