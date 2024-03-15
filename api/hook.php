<?php

require_once __DIR__ . '/../config.php';

use App\Bot;
use Longman\TelegramBot\Exception\TelegramException;


try {
    $bot = new Bot($bot_api_key, $bot_username);

    $bot->handleUpdates();
} catch (TelegramException $e) {
    echo $e->getMessage();
}
