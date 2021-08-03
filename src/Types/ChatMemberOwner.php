<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @see https://core.telegram.org/bots/api#chatmemberowner
 *
 * Class ChatMemberOwner
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberOwner extends ChatMember
{
    /**
     * The member's status in the chat, always “creator”
     * @var string
     */
    public string $status = self::TYPE_CREATOR;
    /**
     * True, if the user's presence in the chat is hidden
     * @var bool
     */
    public bool $is_anonymous;
    /**
     * Optional. Custom title for this user
     * @var string|null
     */
    public ?string $custom_title = null;
}