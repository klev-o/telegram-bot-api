<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechatmember
 *
 * Class BotCommandScopeChatMember
 * @package Klev\TelegramBotApi\Types
 */
class BotCommandScopeChatMember implements BotCommandScope
{
    /**
     * Scope type, must be chat_member
     * @var string
     */
    public string $type = 'chat_member';
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
}