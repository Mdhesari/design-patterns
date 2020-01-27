<?php

namespace App\Flyweight\Bookshelf;

class Book
{

    public $title;

    public $context;

    public $author;

    public function __construct(array $book)
    {
        $this->title = $book['title'];
        $this->context = $book['context'];
        $this->author = $book['author'] ?? "Unknown";
    }

    public function getInfo()
    {

        return "
        {$this->title} : {$this->context} from {$this->author}
        ";
    }
}
