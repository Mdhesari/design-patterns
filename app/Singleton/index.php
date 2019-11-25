<?php

use App\Singleton\DBConnect;

$db = DBConnect::singleton();

var_dump($db);

$db2 = DBConnect::singleton();

var_dump($db2);

$db3 = DBConnect::singleton();

var_dump($db3);
