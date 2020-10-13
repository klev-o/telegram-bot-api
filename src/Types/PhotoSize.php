<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * Class PhotoSize
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#photosize
 */
class PhotoSize extends BaseType
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
     * Photo width
     * @var integer
     */
    public int $width;
    /**
     * Photo height
     * @var integer
     */
    public int $height;
    /**
     * Optional. File size
     * @var int|null
     */
    public ?int $file_size;
}