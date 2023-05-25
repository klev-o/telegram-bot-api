<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be
 * sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with
 * the specified content instead of the video.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvideo
 *
 * Class InlineQueryResultVideo
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultVideo implements InlineQueryResult
{
    /**
     * 	Type of the result, must be video
     * @var string
     */
    public string $type = 'video';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid URL for the embedded video player or video file
     * @var string
     */
    public string $video_url;
    /**
     * Mime type of the content of video url, “text/html” or “video/mp4”
     * @var string
     */
    public string $mime_type;
    /**
     * URL of the thumbnail (jpeg only) for the video
     * @var string
     */
    public string $thumbnail_url;
    /**
     * Title for the result
     * @var string
     */
    public string $title;
    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Video width
     * @var int|null
     */
    public ?int $video_width;
    /**
     * Optional. Video height
     * @var int|null
     */
    public ?int $video_height;
    /**
     * Optional. Video duration in seconds
     * @var string|null
     */
    public ?string $video_duration;
    /**
     * Optional. Short description of the result
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * 	Optional. Content of the message to be sent instead of the video. This field is required if
     * InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $video_url, string $mime_type, string $thumbnail_url, string $title)
    {
        $this->id = $id;
        $this->video_url = $video_url;
        $this->mime_type = $mime_type;
        $this->thumbnail_url = $thumbnail_url;
        $this->title = $title;
    }
}