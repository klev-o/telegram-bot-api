<?php

namespace Klev\TelegramBotApi\Methods\UpdatingMessages;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Use this method to edit text and game messages. On success, if the edited message is not an inline message,
 * the edited Message is returned, otherwise True is returned.
 *
 * Class EditMessageText
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 *
 * @see https://core.telegram.org/bots/api#editmessagetext
 */
class EditMessageText extends BaseMethod
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
     * New text of the message, 1-4096 characters after entities parsing
     * @var string
     */
    public string $text;
    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     * @var string
     */
    public string $parse_mode = 'html';
    /**
     * List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $entities = null;
    /**
     * Disables link previews for links in this message
     * @var bool
     */
    public ?bool $disable_web_page_preview = null;
    /**
     * A JSON-serialized object for an inline keyboard.
     * @var InlineKeyboardMarkup|null
     */
    public $reply_markup = '';

    public function __construct($text)
    {
        $this->text = $text;
    }
}