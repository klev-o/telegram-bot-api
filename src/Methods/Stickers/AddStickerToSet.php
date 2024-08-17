<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\InputSticker;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot. The format of the added sticker must match the
 * format of the other stickers in the set. Emoji sticker sets can have up to 200 stickers. Animated and video sticker
 * sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#addstickertoset
 *
 * Class AddStickerToSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class AddStickerToSet extends BaseMethod
{
    /**
     * 	User identifier of sticker set owner
     * @var int
     */
    public int $user_id;
    /**
     * 	Sticker set name
     * @var string
     */
    public string $name;
    /**
     * A JSON-serialized object with information about the added sticker.
     * If exactly the same sticker had already been added to the set, then the set isn't changed.
     * @var InputSticker
     */
    public $sticker = '';

    public function __construct(int $user_id, string $name, InputSticker $sticker)
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
        }

        $this->setIsPrepared(true);
    }

}