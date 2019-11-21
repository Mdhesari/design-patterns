<?php

namespace App\Observer;

interface ObservableInterface
{

    public function register(ServiceInterface $observer);

    public function unregister(ServiceInterface $observer);

    public function notify();
}
