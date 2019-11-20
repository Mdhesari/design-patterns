<?php

namespace App;

class Publisher implements ObservableInterface
{

    protected $observers = [];

    protected $event;

    public function register(ServiceInterface $observer)
    {

        // generate hash key for storing on db
        $key = spl_object_hash($observer);

        $this->observers[$key] = $observer;

        // managing priorities
        /* for ($i = 0; $i < count($this->observers); $i++) {

            dd($this->observers[$i]);

            if (isset($this->observers[$i + 1])) {

                $priority_1 = $this->observers[$i]->getPriority();
                $priority_2 = $this->observers[$i + 1]->getPriority();
                if ($priority_2 > $priority_1) {

                    $temp = $this->observers[$i];
                    $this->observers[$i] = $this->observers[$i + 1];
                    $this->observers[$i + 1] = $temp;
                    $i = 0;
                    continue;
                }
            }
        } */
    }

    public function unregister(ServiceInterface $observer)
    {

        $key = spl_object_hash($observer);

        unset($this->observers[$key]);
    }

    public function notify()
    {

        foreach ($this->observers as $observer) {

            $observer->update($this);
        }
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
