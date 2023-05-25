<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional
 * caption. Alternatively, you can use input_message_content to send a message with the specified content instead of
 * the animation.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgif
 *
 * Class InlineQueryResultGif
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultGif implements InlineQueryResult
{
    /**
     * Type of the result, must be gif
     * @var string
     */
    public string $type = 'gif';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid URL for the GIF file. File size must not exceed 1MB
     * @var string
     */
    public string $gif_url;
    /**
     * Optional. Width of the GIF
     * @var int|null
     */
    public ?int $gif_width;
    /**
     * Optional. Height of the GIF
     * @var int|null
     */
    public ?int $gif_height;
    /**
     * Optional. Duration of the GIF
     * @var int|null
     */
    public ?int $gif_duration;
    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @var string
     */
    public string $thumbnail_url;
    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”.
     * Defaults to “image/jpeg”
     * @var string|null
     */
    public ?string $thumbnail_mime_type ;
    /**
     * Optional. Title for the result
     * @var string|null
     */
    public ?string $title;
    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the GIF animation
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $gif_url, string $thumbnail_url)
    {
        $this->id = $id;
        $this->gif_url = $gif_url;
        $this->thumbnail_url  = $thumbnail_url;
    }
}