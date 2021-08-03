<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallgroupchats
 *
 * Class BotCommandScopeAllGroupChats
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeAllGroupChats implements BotCommandScope
{
    /**
     * Scope type, must be all_group_chats
     * @var string
     */
    public string $type = 'all_group_chats';
}