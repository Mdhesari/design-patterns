<?php

/**
 * Load application bootstraper and autoloads
 */
require_once __DIR__ . '/app/config/bootstrap.php';

use App\Proxy\File\Proxy\FileHandler;

$file = new FileHandler("readme.md");

$file2 = new FileHandler("readme2.md");

$file2 = $file2->lazyLoad();

echo $file2->getContent();
