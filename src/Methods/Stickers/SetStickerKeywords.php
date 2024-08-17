<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to
 * a sticker set created by the bot. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setstickerkeywords
 *
 * Class SetStickerKeywords
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SetStickerKeywords extends BaseMethod
{
    /**
     * File identifier of the sticker
     * @var string
     */
    public string $sticker;

    /**
     * A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
     * @var string[]
     */
    public $keywords;

    public function __construct(string $sticker, array $keywords)
    {
        $this->sticker = $sticker;
        $this->keywords = $keywords;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->keywords)) {
            $this->keywords = json_encode($this->keywords);
        }

        $this->setIsPrepared(true);
    }
}