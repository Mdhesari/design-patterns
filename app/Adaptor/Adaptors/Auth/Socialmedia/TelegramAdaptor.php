<?php

namespace App\Adaptor\Adaptors\Auth\Socialmedia;

use App\Adaptor\Auth\Socialmedia\Telegram;
use App\Adaptor\Contracts\SocialmediaRegister;

class TelegramAdaptor implements SocialmediaRegister
{

    private $driver;

    public function __construct(Telegram $driver)
    {

        $this->driver = $driver;
    }

    public function getUserToken(array $userData): string
    {

        $userData_jsoned = json_encode($userData);

        $this->driver->login($userData_jsoned);

        return join(" ", $userData);
    }

    public function update(string $token, array $data)
    {

        array_unshift($data, $token);

        $this->driver->webhook($data);
    }
}
