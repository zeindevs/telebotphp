<?php

require_once __DIR__ . '/../config.php';

use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Telegram;

try {
    $telegram = new Telegram($bot_api_key, $bot_username);

    $result = $telegram->setWebhook($hook_url);

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (TelegramException $e) {
    echo $e->getMessage();
}
