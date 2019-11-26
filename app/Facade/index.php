<?php

use App\Facade\Auth;

$user = [
    'email' => 'mdhesari99@gmail.com',
    'password' => '53933',
    'language' => 'persian',
];

$auth = new Auth;

if ($auth->signUp($user)) {

    if ($auth->auth($user)) {

        echo "Welcome to your account!";
    }
}
