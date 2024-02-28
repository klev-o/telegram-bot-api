<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are
 * skipped. Service messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied.
 * A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is
 * analogous to the method forwardMessages, but the copied messages don't have a link to the original message.
 * Album grouping is kept for copied messages. On success, an array of MessageId of the sent messages is returned.
 *
 * Class CopyMessages
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#copymessages
 */
class CopyMessages extends BaseMethod
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
     * Unique identifier for the chat where the original message was sent (or channel username in the format
     * @channelusername)
     * @var string
     */
    public string $from_chat_id;
    /**
     * Identifiers of 1-100 messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly
     * increasing order.
     * @var int[]
     */
    public array $message_ids;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * Pass True to copy the messages without their captions
     * @var bool|null
     */
    public ?bool $remove_caption = null;

    public function __construct($chat_id, $from_chat_id, $message_ids)
    {
        $this->chat_id = $chat_id;
        $this->from_chat_id = $from_chat_id;
        $this->message_ids = $message_ids;
    }
}