<?php

namespace App\Command\Message\Drivers;

use App\Command\Message\MessageDriver;

class Sms implements MessageDriver
{

    public function __construct($title, $text, $phone)
    {

        $this->title = $title;

        $this->text = $text;

        $this->phone = $phone;
    }

    public function send()
    {
        //    $status = SMS::send($this->title, $this->text, $this->phone);
        $status = true;

        echo "From : {$this->phone} , {$this->title} \n {$this->text} " . PHP_EOL;

        return $status;
    }
}
