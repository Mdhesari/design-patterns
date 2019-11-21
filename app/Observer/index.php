<?php


use App\Observer\Publisher;
use App\Observer\MailObserver;
use App\Observer\SmsObserver;
use App\Observer\ClockObserver;
use App\Observer\NotifyHandler;

$publisher = new Publisher(new NotifyHandler);

$mail = new MailObserver;

$sms = new SmsObserver;

$clock = new ClockObserver;

$publisher->register($mail);

$publisher->register($sms);

$publisher->register($clock);

$publisher->setEvent('hi');

$publisher->unregister($sms);
$publisher->unregister($clock);

$publisher->setEvent("clicked by user");
