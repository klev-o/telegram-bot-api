<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\PhotoSize;

class StickerSet extends BaseType
{
    public string $name;
    public string $title;
    public bool $is_animated;
    public bool $contains_masks;
    /**
     * @var Sticker[]
     */
    public array $stickers;
    public ?PhotoSize $thumb;
}