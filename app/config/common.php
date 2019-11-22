<?php

function dd($content)
{

    var_dump($content);

    die;
}

function checkNullAndReturn($var, $correct, $incorrect = "")
{

    return is_null($var) ? $incorrect : $correct;
}
