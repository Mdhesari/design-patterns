<?php

use App\Flyweight\Bookshelf\BookFactory;
use App\Flyweight\Bookshelf\Bookshelf;
use App\Flyweight\Bookshelf\Validators\AuthorValidator;
use App\Flyweight\Bookshelf\Validators\ContextValidator;
use App\Flyweight\Bookshelf\Validators\TitleValidator;


$bookFactory = new BookFactory(
    new TitleValidator,
    new ContextValidator,
    new AuthorValidator
);

$bookshelf = new Bookshelf;

$book1 = $bookFactory->getBook([
    'title' => 'love is one',
    'context' => 'there you go...'
]);

$book2 = $bookFactory->getBook([
    'title' => 'love is one',
    'context' => 'just for test',
]);

$book3 = $bookFactory->getBook([
    'title' => 'Empire is close',
    'context' => 'what a big empire!',
]);

$bookshelf->add($book1)->add($book2)->add($book3);

$bookshelf->viewAll();
