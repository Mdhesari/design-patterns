<?php

namespace App\Flyweight\Bookshelf\Contracts;

interface ValidatorRepository
{

    public function validate(array $book) : array;
}
