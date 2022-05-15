<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @link https://core.telegram.org/bots/api#menubuttoncommands
 *
 * Class MenuButtonCommands
 * @package Klev\TelegramBotApi\Types
 */
class MenuButtonCommands extends MenuButton
{
    /**
     * Represents a menu button, which opens the bot's list of commands.
     * @var string
     */
    public string $type = MenuButton::TYPE_COMMANDS;
}