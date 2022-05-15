<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 *
 * Class ChatMemberBanned
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberBanned extends ChatMember
{
    /**
     * The member's status in the chat, always “kicked”
     * @var string
     */
    public string $status = self::TYPE_KICKED;
    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
     * @var int
     */
    public int $until_date;
}