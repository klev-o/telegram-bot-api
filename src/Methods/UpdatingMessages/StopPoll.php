<?php


namespace Klev\TelegramBotApi\Methods\UpdatingMessages;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll with the final results
 * is returned.
 *
 * @link https://core.telegram.org/bots/api#stoppoll
 *
 * Class StopPoll
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 */
class StopPoll extends BaseMethod
{
    /**
     * Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var string|null
     */
    public ?string $business_connection_id;
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
    /**
     * A JSON-serialized object for an inline keyboard.
     * @var InlineKeyboardMarkup|null
     */
    public $reply_markup = '';

    public function __construct($chat_id, $message_id)
    {
        $this->chat_id = $chat_id;
        $this->message_id = $message_id;
    }
}