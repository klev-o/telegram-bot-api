<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * Class Animation
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#animation
 */
class Animation extends BaseType
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
     * Optional. Animation thumbnail as defined by sender
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb;
    /**
     * Optional. Original animation filename as defined by sender
     * @var string|null
     */
    public ?string $file_name;
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string|null
     */
    public ?string $mime_type;
    /**
     * Optional. File size
     * @var int|null
     */
    public ?int $file_size;

    /**
     * @param $key
     * @param $data
     * @return object|null
     */
    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'thumb':
                return new PhotoSize($data);
        }

        return null;
    }
}