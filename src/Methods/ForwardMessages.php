<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or
 * forwarded, they are skipped. Service messages and messages with protected content can't be forwarded.
 * Album grouping is kept for forwarded messages. On success, an array of MessageId of the sent messages is returned.
 *
 * Class ForwardMessages
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#forwardmessages
 */
class ForwardMessages
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Unique identifier for the chat where the original message was sent (or channel username in the
     * format @channelusername)
     * @var string
     */
    public string $from_chat_id;
    /**
     * Identifiers of 1-100 messages in the chat from_chat_id to forward. The identifiers must be specified in a
     * strictly increasing order.
     * @var int[]
     */
    public array $message_ids;
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

    public function __construct($chat_id, $from_chat_id, $message_ids)
    {
        $this->chat_id = $chat_id;
        $this->from_chat_id = $from_chat_id;
        $this->message_ids = $message_ids;
    }
}