<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker set that was
 * created by the bot. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setstickermaskposition
 *
 * Class SetStickerMaskPosition
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SetStickerMaskPosition extends BaseMethod
{
    /**
     * File identifier of the sticker
     * @var string
     */
    public string $sticker;
    /**
     * A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to
     * remove the mask position.
     * @var MaskPosition|null
     */
    public $mask_position = '';

    public function __construct(string $sticker)
    {
        $this->sticker = $sticker;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->mask_position)) {
            $this->mask_position = json_encode($this->mask_position);
        }

        $this->setIsPrepared(true);
    }
}