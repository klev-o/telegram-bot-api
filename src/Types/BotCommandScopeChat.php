<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering a specific chat.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechat
 *
 * Class BotCommandScopeChat
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeChat implements BotCommandScope
{
    /**
     * Scope type, must be chat
     * @var string
     */
    public string $type = 'chat';
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
}