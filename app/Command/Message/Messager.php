<?php

namespace App\Command\Message;

/**
 * 
 * Invoker
 * 
 */

class Messager
{

    protected $messages = [];

    public function addMessage(MessageDriver ...$messages)
    {

        $this->messages = $messages;
    }

    public function send()
    {

        foreach ($this->messages as $message) {

            $sendStatus = false;

            while (!$sendStatus) {

                $sendStatus = $message->send();
            }
        }
    }
}
