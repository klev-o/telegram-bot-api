<?php

namespace Klev\TelegramBotApi\Methods\UpdatingMessages;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline
 * message, the edited Message is returned, otherwise True is returned.
 *
 * Class EditMessageReplyMarkup
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 *
 * @see https://core.telegram.org/bots/api#editmessagereplymarkup
 */
class EditMessageReplyMarkup extends BaseMethod
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     * @var string|null
     */
    public ?string $chat_id = null;
    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit
     * @var string|null
     */
    public ?string $message_id = null;
    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message
     * @var string|null
     */
    public ?string $inline_message_id = null;
    /**
     * A JSON-serialized object for an inline keyboard.
     * @var InlineKeyboardMarkup|null
     */
    public $reply_markup = '';
}