<?php

namespace App\Command\Message\Drivers;

use App\Command\Message\MessageDriver;

class Email implements MessageDriver
{

    public function __construct($title, $text, $subject)
    {

        $this->title = $title;

        $this->text = $text;

        $this->subject = $subject;
    }

    public function send()
    {

        // $status = Mail::send($this->title, $this->text, $this->subject);
        $status = true;

        echo "From : {$this->subject} , {$this->title} \n {$this->text} " . PHP_EOL;

        return $status;
    }
}
