<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a bot command.
 *
 * Class BotCommand
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#botcommand
 */
class BotCommand extends BaseType
{
    /**
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @var string
     */
    public string $command;
    /**
     * Description of the command, 3-256 characters.
     * @var string
     */
    public string $description;
}