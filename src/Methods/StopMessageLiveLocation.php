<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Use this method to stop updating a live location message before live_period expires. On success, if the message was
 * sent by the bot, the sent Message is returned, otherwise True is returned.
 *
 * Class StopMessageLiveLocation
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#stopmessagelivelocation
 */
class StopMessageLiveLocation extends BaseMethod
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     * @var string|null
     */
    public ?string $chat_id = null;
    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit
     * @var int|null
     */
    public ?int $message_id = null;
    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message
     * @var string|null
     */
    public ?string $inline_message_id = null;
    /**
     * A JSON-serialized object for a new inline keyboard.
     * @var InlineKeyboardMarkup
     */
    public $reply_markup = '';
}