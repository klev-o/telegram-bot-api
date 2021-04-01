<?php


namespace Klev\TelegramBotApi\Types\Stickers;


use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a sticker.
 *
 * @see https://core.telegram.org/bots/api#sticker
 *
 * Class Sticker
 * @package Klev\TelegramBotApi\Types\Stickers
 */
class Sticker extends BaseType
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
     * Sticker width
     * @var int
     */
    public int $width;
    /**
     * Sticker height
     * @var int
     */
    public int $height;
    /**
     * True, if the sticker is animated
     * @var bool
     */
    public bool $is_animated;
    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb = null;
    /**
     * Optional. Emoji associated with the sticker
     * @var string|null
     */
    public ?string $emoji = null;
    /**
     * Optional. Name of the sticker set to which the sticker belongs
     * @var string|null
     */
    public ?string $set_name = null;
    /**
     * Optional. For mask stickers, the position where the mask should be placed
     * @var MaskPosition|null
     */
    public ?MaskPosition $mask_position;
    /**
     * Optional. File size
     * @var int|null
     */
    public ?int $file_size = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'thumb':
                return new PhotoSize($data);
            case 'mask_position':
                return new MaskPosition($data);
        }

        return null;
    }
}