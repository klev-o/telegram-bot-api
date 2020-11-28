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

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'stickers':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new Sticker($entity);
                }
                return $result;
            case 'thumb':
                return new PhotoSize($data);
        }

        return null;
    }
}