<?php

namespace App\NullObject\Person;

class Developer extends Coder
{

    protected $platforms = [];

    public function setPlatforms(...$platforms)
    {

        $this->platforms = array_merge($this->platforms, $platforms);
    }

    public function getData()
    {
        $output = parent::getData();

        return $output . PHP_EOL . " Platforms : " . join(" ,", $this->platforms);
    }
}
