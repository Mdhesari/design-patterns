<?php

namespace App\Flyweight\Bookshelf\Validators;

use App\Flyweight\Bookshelf\Contracts\ValidatorRepository;
use Exception;

class AuthorValidator implements ValidatorRepository
{

    public function validate(array $book): array
    {
        if (false === isset($book['author'])) {

            $book['author'] = 'Unknown';
        }

        return $book;
    }
}
