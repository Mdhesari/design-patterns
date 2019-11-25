<?php

namespace App\Adaptor\Contracts;

interface SocialmediaRegister
{

    public function getUserToken(array $userData): string;

    public function update(string $token, array $data);
}
