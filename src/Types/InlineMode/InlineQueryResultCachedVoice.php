<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by
 * the user. Alternatively, you can use input_message_content to send a message with the specified content instead of
 * the voice message.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
 *
 * Class InlineQueryResultCachedVoice
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultCachedVoice implements InlineQueryResult
{
    /**
     * Type of the result, must be voice
     * @var string
     */
    public string $type = 'voice';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid file identifier for the voice message
     * @var string
     */
    public string $voice_file_id;
    /**
     * Voice message title
     * @var string
     */
    public string $title;
    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * 	Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the voice message
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $voice_file_id, string $title)
    {
        $this->id = $id;
        $this->voice_file_id = $voice_file_id;
        $this->title = $title;
    }
}