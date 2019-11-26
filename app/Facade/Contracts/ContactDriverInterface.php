<?php

namespace App\Facade\Contracts;

interface ContactDriverInterface
{

    public function to($subject);

    public function text($text);    

    public function send();
}
