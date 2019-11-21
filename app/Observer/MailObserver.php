<?php

namespace App\Observer;

class MailObserver implements ServiceInterface
{

    protected $name = "Mail";

    protected $priority = 0;

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
