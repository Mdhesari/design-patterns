<?php

namespace App\Facade\Facades;

use App\Facade\Contracts\ContactDriverInterface;

class Mail implements ContactDriverInterface
{

    private $subject = null;

    private $text = null;

    public function to($subject)
    {

        $this->subject = $subject;

        return $this;
    }

    public function text($text)
    {

        $this->text = $text;

        return $this;
    }

    public function send()
    {

        return true;
    }
}
