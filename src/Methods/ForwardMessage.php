<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to forward messages of any kind. On success, the sent Message is returned.
 *
 * Class ForwardMessage
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#forwardmessage
 */
class ForwardMessage
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the chat where the original message was sent (or channel username in the
     * format @channelusername)
     * @var string
     */
    public string $from_chat_id;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * Message identifier in the chat specified in from_chat_id
     * @var int
     */
    public int $message_id;

    public function __construct($chat_id, $from_chat_id, $message_id)
    {
        $this->chat_id = $chat_id;
        $this->from_chat_id = $from_chat_id;
        $this->message_id = $message_id;
    }
}