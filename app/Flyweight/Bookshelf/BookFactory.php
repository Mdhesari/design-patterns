<?php

namespace App\Flyweight\Bookshelf;

use App\Flyweight\Bookshelf\Book;
use App\Flyweight\Bookshelf\Contracts\ValidatorRepository;

class BookFactory
{

    protected $books = [];

    protected $validators = [];

    public function __construct(ValidatorRepository ...$validators)
    {

        $this->validators = $validators;
    }

    public function getBook(array $book)
    {
        foreach ($this->validators as $validator) {

            $book = $validator->validate($book);
        }

        $key = "{$book['title']}_{$book['author']}";

        if (array_key_exists($key, $this->books)) {

            $book = $this->books[$key];
        } else {

            $book = new Book($book);
            $this->books[$key] = $book;
        }

        return $book;
    }
}
