<?php

namespace App\Flyweight\Bookshelf;

class Bookshelf
{

    protected $books = [];

    public function add(Book $book)
    {

        if (!in_array($book, $this->books))
            $this->books[] = $book;

        return $this;
    }

    private function print(Book $book)
    {

        echo $book->title;
        echo PHP_EOL;
        echo $book->context;
        echo PHP_EOL;
        echo $book->author;

        echo PHP_EOL . "------------------------" . PHP_EOL;
    }

    public function viewAll()
    {

        foreach ($this->books as $book) {

            $this->print($book);
        }
    }

    public function view(Book $book)
    {

        $this->print($book);
    }
}
