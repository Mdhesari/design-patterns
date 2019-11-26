<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Facade\Facades\Auth;
use App\Facade\Facades\Mail;
use App\FAcade\Facades\User;
use App\Facade\Facades\Validation;

$user = [
    'email' => 'mdhesari99@gmail.com',
    'password' => '53933',
    'language' => 'persian',
];

$auth = new Auth(
    new Validation,
    new User,
    new Mail,
);

if ($auth->signUp($user)) {

    if ($auth->auth($user)) {

        echo "Welcome to your account!";
    }
}
