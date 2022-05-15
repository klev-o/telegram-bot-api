<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering all private chats.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallprivatechats
 *
 * Class BotCommandScopeAllPrivateChats
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeAllPrivateChats implements BotCommandScope
{
    /**
     * Scope type, must be all_private_chats
     * @var string
     */
    public string $type = 'all_private_chats';
}