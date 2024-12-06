<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * Class ChatMemberMember
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberMember extends ChatMember
{
    /**
     * The member's status in the chat, always “member”
     * @var string
     */
    public string $status = self::TYPE_MEMBER;
    /**
     * Optional. Date when the user's subscription will expire; Unix time
     * @var int|null
     */
    public ?int $until_date = null;
}