<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat,
 * the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a
 * supergroup or 'can_edit_messages' admin right in a channel. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#unpinchatmessage
 *
 * Class UnpinChatMessage
 * @package Klev\TelegramBotApi\Methods
 */
class UnpinChatMessage extends BaseMethod
{
    /**
     * Unique identifier of the business connection on behalf of which the message will be unpinned
     * @var string|null
     */
    public ?string $business_connection_id;
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername
     * @var string|int
     */
    public string $chat_id;
    /**
     * Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be
     * unpinned.
     * @var int|null
     */
    public ?int $message_id;

    public function __construct($chat_id)
    {
        $this->chat_id = $chat_id;
    }
}