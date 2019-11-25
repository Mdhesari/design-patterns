<?php

namespace App\Adaptor\Auth\Socialmedia;

class Telegram
{

    public function login($user)
    {

        return $user;
    }

    public function webhook($info)
    {

        return 1;
    }
}
