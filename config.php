<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$bot_api_key  =  $_ENV['BOT_TOKEN'];
$bot_username = $_ENV['BOT_USERNAME'];
$hook_url = $_ENV['BOT_HOOK_URL'];

$mysql_credentials = [
   'host'     => $_ENV['MYSQL_HOST'],
   'port'     => 3306, // optional
   'user'     => $_ENV['MYSQL_USER'],
   'password' => $_ENV['MYSQL_PASSWORD'],
   'database' => $_ENV['MYSQL_DATABASE'],
];