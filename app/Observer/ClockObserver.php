<?php

namespace App\Observer;

class ClockObserver implements ServiceInterface
{

    protected $name = "Clock";

    protected $priority = 50;

    public function update(ObservableInterface $observable)
    {

        print_r("{$this->name} notified : {$observable->getEvent()}");
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
