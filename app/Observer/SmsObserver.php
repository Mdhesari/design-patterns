<?php

namespace App\Observer;

class SmsObserver implements ServiceInterface
{

    protected $name = "SMS";

    protected $priority = 10;

    public function update(ObservableInterface $observable)
    {

        print_r("{$this->name} was called by {$observable->getEvent()} event.");
        echo PHP_EOL;
    }

    public function getPriority(): int
    {

        return $this->priority;
    }

    public function setPriority(int $priority){

        $this->priority = $priority;
    }
}
