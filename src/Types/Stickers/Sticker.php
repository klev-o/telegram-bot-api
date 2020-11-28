<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a sticker.
 *
 * Class Sticker
 * @package Klev\TelegramBotApi\Types\Stickers
 *
 * @see https://core.telegram.org/bots/api#sticker
 */
class Sticker extends BaseType
{
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public bool $is_animated;
    public ?PhotoSize $thumb;
    public ?string $emoji;
    public ?string $set_name;
    public ?MaskPosition $mask_position;
    public ?int $file_size;
}