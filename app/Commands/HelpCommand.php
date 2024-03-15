<?php

namespace App\Commands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Request;

class HelpCommand extends UserCommand
{
	protected $name = 'help';
	protected $description = 'Help command';

	public function execute(): ServerResponse
	{
		$chat_id = $this->getMessage()->getChat()->getId();

		$text = "Help command\n\n/start for start bot\n/help for show list command";
		$data = ['chat_id' => $chat_id, 'text' => $text];

		return Request::sendMessage($data);
	}
}
