<?php

namespace App\Flyweight\Bookshelf\Validators;

use App\Flyweight\Bookshelf\Contracts\ValidatorRepository;
use Exception;

class TitleValidator implements ValidatorRepository
{

    public function validate(array $book): array
    {
        if (false === isset($book['title'])) {

            throw new Exception("Title is not defined. " . __METHOD__);
        }

        return $book;
    }
}
