<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file
 * will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the animation.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 *
 * Class InlineQueryResultMpeg4Gif
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultMpeg4Gif implements InlineQueryResult
{
    /**
     * Type of the result, must be mpeg4_gif
     * @var string
     */
    public string $type = 'mpeg4_gif';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     * @var string
     */
    public string $mpeg4_url;
    /**
     * Optional. Video width
     * @var int|null
     */
    public ?int $mpeg4_width;
    /**
     * Optional. Video height
     * @var int|null
     */
    public ?int $mpeg4_height;
    /**
     * Optional. Video duration
     * @var int|null
     */
    public ?int $mpeg4_duration;
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
    public ?string $thumbnail_mime_type;
    /**
     * Optional. Title for the result
     * @var string|null
     */
    public ?string $title;
    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
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
     * Optional. Pass True, if the caption must be shown above the message media
     * @var bool|null
     */
    public ?bool $show_caption_above_media = null;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the video animation
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $mpeg4_url, string $thumbnail_url)
    {
        $this->id = $id;
        $this->mpeg4_url = $mpeg4_url;
        $this->thumbnail_url  = $thumbnail_url;
    }
}