<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will
 * be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content
 * instead of the the voice message.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvoice
 *
 * Class InlineQueryResultVoice
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultVoice implements InlineQueryResult
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
     * A valid URL for the voice recording
     * @var string
     */
    public string $voice_url;
    /**
     * Recording title
     * @var string
     */
    public string $title;
    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Recording duration in seconds
     * @var int|null
     */
    public ?int $voice_duration;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the voice recording
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $voice_url, string $title)
    {
        $this->id = $id;
        $this->voice_url = $voice_url;
        $this->title = $title;
    }
}