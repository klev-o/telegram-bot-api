<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechatadministrators
 *
 * Class BotCommandScopeChatAdministrators
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeChatAdministrators implements BotCommandScope
{
    /**
     * Scope type, must be chat_administrators
     * @var string
     */
    public string $type = 'chat_administrators';
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
}