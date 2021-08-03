<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @see https://core.telegram.org/bots/api#chatmemberleft
 *
 * Class ChatMemberLeft
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberLeft extends ChatMember
{
    /**
     * The member's status in the chat, always “left”
     * @var string
     */
    public string $status = self::TYPE_LEFT;
}