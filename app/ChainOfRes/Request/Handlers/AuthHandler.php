<?php

namespace App\ChainOfRes\Request\Handlers;

use App\ChainOfRes\Request\Contracts\BaseHandler;

class AuthHandler extends BaseHandler
{

    public function handle($request)
    {

        if (isset($request['loggedIn'])) {

            $request['valid'] = true;
        }

        return parent::handle($request);
    }
}
