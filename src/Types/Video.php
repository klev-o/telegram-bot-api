<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a video file.
 *
 * Class Video
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#video
 */
class Video extends BaseType
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     * @var string
     */
    public string $file_id;
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be
     * used to download or reuse the file.
     * @var string
     */
    public string $file_unique_id;
    /**
     * Video width as defined by sender
     * @var int
     */
    public int $width;
    /**
     * Video height as defined by sender
     * @var int
     */
    public int $height;
    /**
     * Duration of the video in seconds as defined by sender
     * @var int
     */
    public int $duration;
    /**
     * Optional. Video thumbnail
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumbnail = null;
    /**
     * Optional. Mime type of a file as defined by sender
     * @var string|null
     */
    public ?string $mime_type = null;
    /**
     * Optional. File size
     * @var float|null
     */
    public ?float $file_size = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'thumbnail':
                return new PhotoSize($data);
        }

        return null;
    }
}