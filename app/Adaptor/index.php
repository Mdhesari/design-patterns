<?php

use App\Adaptor\Adaptors\Auth\Socialmedia\GithubAdaptor;
use App\Adaptor\Adaptors\Auth\Socialmedia\TelegramAdaptor;
use App\Adaptor\Auth\Socialmedia\Github;
use App\Adaptor\Auth\Socialmedia\Telegram;

$telegram = new TelegramAdaptor(new Telegram);

$token = $telegram->getUserToken(["username" => "@mdhesari1", "password" => "123456"]);

$telegram->update($token, ["text" => "Hi There", "chat_id" => "210"]);

$github = new GithubAdaptor(new Github);


$token = $github->getUserToken(["username" => "mdhesari", "password" => "542"]);

$github->update($token, ["newRecord", "Repositroy1"]);
