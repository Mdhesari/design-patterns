<?php


use App\Prototype\Books\PHP;

$php = new PHP;

$book1 = clone $php;

$book1->setTitle("You do not know php");

var_dump($book1);
