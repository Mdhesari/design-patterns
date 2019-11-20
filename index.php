<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Publisher;
use App\MailObserver;
use App\SmsObserver;
use App\ClockObserver;
use App\NotifyHandler;

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
