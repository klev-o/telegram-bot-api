<?php


namespace Klev\TelegramBotApi\Types\Stickers;


use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\File;
use Klev\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a sticker.
 *
 * @link https://core.telegram.org/bots/api#sticker
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
     * Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is
     * independent from its format, which is determined by the fields is_animated and is_video.
     * @var string
     */
    public string $type;
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
     * True, if the sticker is a video sticker
     *
     * @link https://telegram.org/blog/video-stickers-better-reactions
     * @var bool
     */
    public bool $is_video;
    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumbnail = null;
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
     * Optional. For premium regular stickers, premium animation for the sticker
     * @var File|null
     */
    public ?File $premium_animation = null;
    /**
     * Optional. For mask stickers, the position where the mask should be placed
     * @var MaskPosition|null
     */
    public ?MaskPosition $mask_position = null;
    /**
     * 	Optional. For custom emoji stickers, unique identifier of the custom emoji
     * @var string|null
     */
    public ?string $custom_emoji_id = null;
    /**
     * Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram
     * Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     * @var bool|null
     */
    public ?bool $needs_repainting = null;
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
            case 'mask_position':
                return new MaskPosition($data);
        }

        return null;
    }
}