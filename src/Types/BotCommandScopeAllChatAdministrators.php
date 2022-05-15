<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 *
 * Class BotCommandScopeAllChatAdministrators
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeAllChatAdministrators implements BotCommandScope
{
    /**
     * Scope type, must be all_chat_administrators
     * @var string
     */
    public string $type = 'all_chat_administrators';
}