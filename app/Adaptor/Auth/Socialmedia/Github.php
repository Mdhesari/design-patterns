<?php

namespace App\Adaptor\Auth\Socialmedia;

class Github
{

    public function auth(array $user)
    {

        return $user;
    }

    public function send($token,$info)
    {

        return 1;
    }
}
