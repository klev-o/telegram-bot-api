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
     * @var string
     */
    public string $file_id;
    /**
     * @var string
     */
    public string $file_unique_id;
    /**
     * @var int
     */
    public int $width;
    /**
     * @var int
     */
    public int $height;
    /**
     * @var int
     */
    public int $duration;
    /**
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb;
    /**
     * @var string|null
     */
    public ?string $file_name;
    /**
     * @var string|null
     */
    public ?string $mime_type;
    /**
     * @var int|null
     */
    public ?int $file_size;
}