<?php

namespace App\ChainOfRes\Request\Handlers;

use App\ChainOfRes\Request\Contracts\BaseHandler;

class IPHandler extends BaseHandler
{

    private $blocked = ['192.168.1.4'];

    public function handle($request)
    {

        if (in_array($request['ip'], $this->blocked)) {

            $request['error'] = "Ip is blocked";

            echo (new ErrorHandler)->handle($request);

            return false;
        }

        return parent::handle($request);
    }
}
