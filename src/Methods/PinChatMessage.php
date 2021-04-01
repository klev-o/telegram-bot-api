<?php


namespace Klev\TelegramBotApi\Methods;


/**
 * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the
 * bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a
 * supergroup or 'can_edit_messages' admin right in a channel. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#pinchatmessage
 *
 * Class PinChatMessage
 * @package Klev\TelegramBotApi\Methods
 */
class PinChatMessage extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Identifier of a message to pin
     * @var int
     */
    public int $message_id;
    /**
     * Pass True, if it is not necessary to send a notification to all chat members about the new pinned message.
     * Notifications are always disabled in channels.
     * @var bool|null
     */
    public ?bool $disable_notification;

    public function __construct($chat_id, int $message_id)
    {
        $this->chat_id = $chat_id;
        $this->message_id = $message_id;
    }
}