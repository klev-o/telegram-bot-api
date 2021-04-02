<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#setstickerpositioninset
 *
 * Class SetStickerPositionInSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SetStickerPositionInSet extends BaseMethod
{
    /**
     * File identifier of the sticker
     * @var string
     */
    public string $sticker;
    /**
     * New sticker position in the set, zero-based
     * @var int
     */
    public int $position;

    public function __construct(string $sticker, int $position)
    {
        $this->sticker = $sticker;
        $this->position = $position;
    }
}