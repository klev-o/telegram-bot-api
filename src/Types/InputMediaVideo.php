<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Represents a video to be sent.
 *
 * Class InputMediaVideo
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#inputmediavideo
 */
class InputMediaVideo implements InputMedia
{
    /**
     * Type of the result, must be video
     * @var string
     */
    public string $type = 'video';
    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP
     * URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one
     * using multipart/form-data under <file_attach_name> name. More info on Sending Files »
     * @var string
     */
    public string $media;
    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and
     * height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't
     * be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail
     * was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumbnail = '';
    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
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
    public ?int $width = 0;
    /**
     * Optional. Video height
     * @var int|null
     */
    public ?int $height = 0;
    /**
     * Optional. Video duration
     * @var int|null
     */
    public ?int $duration = 0;
    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming
     * @var bool|null
     */
    public ?bool $supports_streaming = false;
    /**
     * Optional. Pass True if the video needs to be covered with a spoiler animation
     * @var bool|null
     */
    public ?bool $has_spoiler = false;

    public function __construct(string $media)
    {
        $this->media = $media;
    }
}