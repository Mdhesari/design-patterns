<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Decorator\Html\Decorator\input\Error;
use App\Decorator\Html\Dom\Input;
use App\Decorator\Html\Decorator\input\Label;

$input = new Input("name");

$input = new Label($input);

$input->setLabel('Enter your name : ');

$input = new Error($input);

$input->setError('There is an invalid value.');

echo $input->toHtml();
