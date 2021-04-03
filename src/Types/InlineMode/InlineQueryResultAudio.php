<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can
 * use input_message_content to send a message with the specified content instead of the audio.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultaudio
 *
 * Class InlineQueryResultAudio
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultAudio implements InlineQueryResult
{
    /**
     * Type of the result, must be audio
     * @var string
     */
    public string $type = 'audio';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid URL for the audio file
     * @var string
     */
    public string $audio_url;
    /**
     * Title
     * @var string
     */
    public string $title;
    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Performer
     * @var string|null
     */
    public ?string $performer;
    /**
     * Optional. Audio duration in seconds
     * @var int|null
     */
    public ?int $audio_duration;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the audio
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $audio_url, $title)
    {
        $this->id = $id;
        $this->audio_url = $audio_url;
        $this->title = $title;
    }
}