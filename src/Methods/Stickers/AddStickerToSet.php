<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker
 * or tgs_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can
 * have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
 *
 * Class AddStickerToSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 *
 * @see https://core.telegram.org/bots/api#addstickertoset
 */
class AddStickerToSet extends BaseMethod
{
    public int $user_id;
    public string $name;
    public ?string $png_sticker = null;
    public ?string $tgs_sticker = null;
    public string $emojis;
    public ?MaskPosition $mask_position = null;

    public function __construct($user_id, $name, $emojis)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->emojis = $emojis;
    }

    public function preparation(): void
    {
        if (!empty($this->contains_masks)) {
            $this->contains_masks = json_encode($this->contains_masks);
        }
    }

}