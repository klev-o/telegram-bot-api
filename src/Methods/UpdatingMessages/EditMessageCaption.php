<?php


namespace Klev\TelegramBotApi\Methods\UpdatingMessages;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the
 * edited Message is returned, otherwise True is returned.
 *
 * @link https://core.telegram.org/bots/api#editmessagecaption
 *
 * Class EditMessageCaption
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 */
class EditMessageCaption extends BaseMethod
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
     * TODO remove in future versions
     * New caption of the message, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $text = '';
    /**
     * New caption of the message, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     * @var string
     */
    public string $parse_mode = 'html';
    /**
     * TODO remove in future versions
     * List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $entities = null;
    /**
     * List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Pass True, if the caption must be shown above the message media
     * @var bool|null
     */
    public ?bool $show_caption_above_media = null;
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
}