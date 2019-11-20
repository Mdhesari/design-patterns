<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Publisher;
use App\MailObserver;
use App\SmsObserver;

$publisher = new Publisher;

$mail = new MailObserver;

$sms = new SmsObserver;

$publisher->register($mail);

$publisher->register($sms);

$publisher->setEvent('hi');

$publisher->unregister($sms);

$publisher->setEvent("clicked by user");
