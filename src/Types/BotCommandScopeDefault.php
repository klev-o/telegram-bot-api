<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are
 * specified for the user.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopedefault
 *
 * Class BotCommandScopeDefault
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeDefault implements BotCommandScope
{
    /**
     * Scope type, must be default
     * @var string
     */
    public string $type = 'default';
}