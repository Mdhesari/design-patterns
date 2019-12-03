<?php

namespace App\Prototype;

abstract class BookPrototype
{

    protected $title;
    protected $topic;
    protected $authors = [];

    public function setAuthors(...$authors)
    {

        $this->authors = $authors;
    }

    public function setTitle($title)
    {

        $this->title = $title;
    }

    public function getTopic()
    {

        return $this->topic;
    }

    public function info()
    {

        $authors = join(" and ", $this->authors);

        return "
            {$this->title} authored by {$authors} in {$this->topic} Category.
        ";
    }

   /*  public function __clone()
    {
        // 
    } */
}
