<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The paid media to send is a video.
 *
 * @link https://core.telegram.org/bots/api#inputpaidmediavideo
 *
 * Class InputPaidMediaVideo
 * @package Klev\TelegramBotApi\Types
 */
final class InputPaidMediaVideo extends PaidMedia
{
    /**
     * Type of the media, must be video
     * @var string
     */
    public string $type = self::TYPE_VIDEO;
    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @var string
     */
    public string $media;
    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused
     * and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was
     * uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @var string|null
     */
    public ?string $thumbnail;
    /**
     * Optional. Video width
     * @var int|null
     */
    public ?int $width;
    /**
     * Optional. Video height
     * @var int|null
     */
    public ?int $height;
    /**
     * Optional. Video duration in seconds
     * @var int|null
     */
    public ?int $duration;
    /**
     * Optional. Pass True if the uploaded video is suitable for streaming
     * @var bool|null
     */
    public ?bool $supports_streaming = null;
}