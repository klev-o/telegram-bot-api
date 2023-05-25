<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * Class VideoNote
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#videonote
 */
class VideoNote extends BaseType
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     * @var string
     */
    public string $file_id;
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     * @var string
     */
    public string $file_unique_id;
    /**
     * Video width and height (diameter of the video message) as defined by sender
     * @var string
     */
    public string $length;
    /**
     * Duration of the video in seconds as defined by sender
     * @var string
     */
    public string $duration;
    /**
     * Optional. Video thumbnail
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumbnail = null;
    /**
     * Optional. File size
     * @var int|null
     */
    public ?int $file_size = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'thumbnail':
                return new PhotoSize($data);
        }

        return null;
    }
}