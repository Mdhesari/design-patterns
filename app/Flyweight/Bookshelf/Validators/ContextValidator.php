<?php

namespace App\Flyweight\Bookshelf\Validators;

use App\Flyweight\Bookshelf\Contracts\ValidatorRepository;
use Exception;

class ContextValidator implements ValidatorRepository
{

    public function validate(array $book): array
    {
        if (false === isset($book['context'])) {

            throw new Exception("Context is not defined. " . __METHOD__);
        }

        return $book;
    }
}
