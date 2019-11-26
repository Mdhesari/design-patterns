<?php

namespace App\Facade;

use App\Facade\Contracts\AuthInterface;
use App\Facade\Facades\Auth as AuthFacade;
use App\Facade\Facades\Mail;
use App\FAcade\Facades\User;
use App\Facade\Facades\Validation;

class Auth implements AuthInterface
{

    public function __construct()
    {
        $this->auth = new AuthFacade(
            new Validation,
            new User,
            new Mail
        );
    }

    public function auth(array $user)
    {

        return $this->auth->auth($user);
    }

    public function signUp(array $user)
    {

        return $this->auth->signUp($user);
    }
}
