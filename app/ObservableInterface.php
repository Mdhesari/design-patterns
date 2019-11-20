<?php

namespace App;

interface ObservableInterface
{

    public function register(ServiceInterface $observer);

    public function unregister(ServiceInterface $observer);

    public function notify();
}
