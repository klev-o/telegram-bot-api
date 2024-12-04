<?php


namespace Klev\TelegramBotApi\Types\Stickers;


use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a sticker set.
 *
 * @link https://core.telegram.org/bots/api#stickerset
 *
 * Class StickerSet
 * @package Klev\TelegramBotApi\Types\Stickers
 */
class StickerSet extends BaseType
{
    /**
     * Sticker set name
     * @var string
     */
    public string $name;
    /**
     * Sticker set title
     * @var string
     */
    public string $title;
    /**
     * Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @var string
     */
    public string $sticker_type;
    /**
     * List of all set stickers
     * @var Sticker[]
     */
    public array $stickers;
    /**
     * Optional. Sticker set thumbnail in the .WEBP or .TGS format
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumbnail = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'stickers':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new Sticker($entity);
                }
                return $result;
            case 'thumbnail':
                return new PhotoSize($data);
        }

        return null;
    }
}