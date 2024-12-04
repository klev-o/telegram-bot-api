<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\InputSticker;

/**
 * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling
 * deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#replacestickerinset
 *
 * Class ReplaceStickerInSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class ReplaceStickerInSet extends BaseMethod
{
    /**
     * User identifier of the sticker set owner
     * @var int
     */
    public int $user_id;
    /**
     * Sticker set name
     * @var string
     */
    public string $name;
    /**
     * File identifier of the replaced sticker
     * @var string
     */
    public string $old_sticker;

    /**
     * A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been
     * added to the set, then the set remains unchanged.
     * @var InputSticker|string
     */
    public $sticker = '';

    public function __construct(int $user_id, string $name, string $old_sticker, InputSticker $sticker)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->sticker = $sticker;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->sticker)) {
            $this->sticker = json_encode($this->sticker);
            $this->setIsPrepared(true);
        }
    }
}