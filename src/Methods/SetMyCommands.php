<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\BotCommand;

/**
 * Use this method to change the list of the bot's commands. Returns True on success.
 *
 * Class SetMyCommands
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#setmycommands
 */
class SetMyCommands extends BaseMethod
{
    /**
     * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands
     * can be specified.
     * @var BotCommand[]
     */
    public $commands;

    public function __construct(BotCommand $commands)
    {
        $this->commands = $commands;
    }

    public function preparation(): void
    {
        $this->commands = json_encode($this->commands);
    }
}