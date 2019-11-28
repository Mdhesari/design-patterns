<?php

namespace App\Composite\Office;

use App\Composite\Office\Contracts\Person;

class Coworker extends Person
{

    protected $employers;

    protected $title;

    public function __construct($title)
    {

        $this->title = $title;
    }

    public function employ(Person ...$employers)
    {

        foreach ($employers as $employer) {

            $this->employers[] = $employer;

            $employer->setCoworker($this);
        }

        return $this;
    }

    public function fire(Person ...$employers)
    {

        foreach ($employers as $employer) {

            $this->employers = array_filter($this->employers, function ($child) use ($employer) {

                return $child != $employer;
            });

            $employer->unsetCoworker();
        }

        return $this;
    }

    public function execute()
    {

        $results = [];

        foreach ($this->employers as $employer) {

            $results[] = $employer->execute();
        }


        return sprintf("{$this->title} ( %s )", join(" + ", $results));
    }
}
