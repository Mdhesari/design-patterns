<?php

namespace App\Adaptor\Adaptors\Auth\Socialmedia;

use App\Adaptor\Auth\Socialmedia\Github;
use App\Adaptor\Contracts\SocialmediaRegister;

class GithubAdaptor implements SocialmediaRegister
{

    private $driver;

    public function __construct(Github $driver)
    {

        $this->driver = $driver;
    }

    public function getUserToken(array $userData): string
    {

        $this->driver->auth($userData);

        return join(" ", $userData);
    }

    public function update(string $token, array $data)
    {

        $this->driver->send($token, $data);
    }
}
