<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a message about a forwarded story in the chat. Currently holds no information.
 *
 * Class Story
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#story
 */
class Story extends BaseType
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
     * Optional. Original filename as defined by sender
     * @var string|null
     */
    public ?string $file_name = null;
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string|null
     */
    public ?string $mime_type = null;
    /**
     * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer
     * or double-precision float type are safe for storing this value.
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