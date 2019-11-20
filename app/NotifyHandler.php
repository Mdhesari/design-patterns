<?php

namespace App;

class NotifyHandler
{

    public function handle(ObservableInterface $observable)
    {
        $this->observers = $observable->getObservers();

        $priorities = $this->getPriorities();

        $observers = array_values($this->observers);

        for ($i = 0; $i < count($observers); $i++) {

            if ($observers[$i]->getPriority() == $priorities[0]) {

                $observers[$i]->update($observable);

                unset($priorities[0]);
                unset($observers[$i]);

                rsort($priorities);
                rsort($observers);

                $i = -1;
                continue;
            }
        }
    }

    private function getPriorities()
    {
        $priorities = [];

        foreach ($this->observers as $observer) {

            $priorities[] = $observer->getPriority();
        }

        rsort($priorities);

        return $priorities;
    }
}
