<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Decorator\Html\Dom\Input;

$input = new Input("name");

echo $input->toHtml();
