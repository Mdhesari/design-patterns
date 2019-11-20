<?php

namespace App;

class Publisher implements ObservableInterface
{

    protected $observers = [];

    protected $event;

    public function __construct(NotifyHandler $notifyHandler)
    {

        $this->notifyHandler = $notifyHandler;
    }

    public function register(ServiceInterface $observer)
    {

        // generate hash key for storing on db
        $key = spl_object_hash($observer);

        $this->observers[$key] = $observer;

    }

    public function unregister(ServiceInterface $observer)
    {

        $key = spl_object_hash($observer);

        unset($this->observers[$key]);
    }

    public function getObservers()
    {

        return $this->observers;
    }

    public function notify()
    {
        $this->notifyHandler->handle($this);
    }

    public function getEvent()
    {

        return $this->event;
    }

    public function setEvent($event)
    {

        $this->event = $event;

        $this->notify();
    }
}
