<?php

namespace App\Commands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Request;

class StartCommand extends UserCommand
{
	protected $name = 'start';
	protected $description = 'Start command';

	public function execute(): ServerResponse
	{
		$chat_id = $this->getMessage()->getChat()->getId();

		$text = 'Hello! This is my first bot.';
		$data = ['chat_id' => $chat_id, 'text' => $text];

		return Request::sendMessage($data);
	}
}
