<?php

namespace App\NullObject\Person;

class Coder extends Person
{

    protected $skills = [];

    public function setSkills(...$skills)
    {

        $this->skills = $skills;
    }

    public function aquireSkilss(...$skills)
    {

        $this->skills = array_merge($this->skills, $skills);
    }

    public function getData()
    {

        return join(" ", $this->skills);
    }
}
