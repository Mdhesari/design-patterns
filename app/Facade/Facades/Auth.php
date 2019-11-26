<?php

namespace App\Facade\Facades;

use App\Facade\Contracts\AuthInterface;
use App\Facade\Contracts\ContactDriverInterface;

class Auth implements AuthInterface
{

    protected $driver;

    protected $validation;

    protected $user;

    public function __construct(Validation $validation, User $user, ContactDriverInterface $driver)
    {

        $this->validation = $validation;

        $this->driver = $driver;

        $this->user = $user;
    }

    public function auth(array $user)
    {

        $validated = $this->validation->validate($user);

        if ($validated) {

            return $this->user->login($user['email'], $user['password']);
        }

        return false;
    }

    public function signUp(array $user)
    {

        $validated = $this->validation->validate($user);

        if ($validated) {

            if ($this->user->create($user)) {

                return $this->driver->to($user['email'])->text("your account is ready!")->send();
            }

            return false;
        }

        return false;
    }
}
