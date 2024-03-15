<?php

namespace App;

use App\Commands\HelpCommand;
use App\Commands\StartCommand;
use Longman\TelegramBot\Commands\AdminCommands\WhoisCommand;
use Longman\TelegramBot\Telegram;

class Bot
{
	private $telegram;

	public function __construct($token, $username)
	{
		$this->telegram = new Telegram($token, $username);
	 	$this->telegram->addCommandClasses([
	 		StartCommand::class,
	 		WhoisCommand::class,
	 		HelpCommand::class,
	 	]);
	}

	public function handleUpdates()
	{
		$this->telegram->useGetUpdatesWithoutDatabase();
		$this->telegram->handle();
	}
}
