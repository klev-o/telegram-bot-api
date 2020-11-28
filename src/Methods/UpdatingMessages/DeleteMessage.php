<?php

namespace Klev\TelegramBotApi\Methods\UpdatingMessages;

use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to delete a message, including service messages
 *
 * Class DeleteMessage
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 *
 * @see https://core.telegram.org/bots/api#deletemessage
 */
class DeleteMessage extends BaseMethod
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit
     * @var int
     */
    public int $message_id;

    public function __construct($chat_id, $message_id)
    {
        $this->chat_id = $chat_id;
        $this->message_id = $message_id;
    }
}