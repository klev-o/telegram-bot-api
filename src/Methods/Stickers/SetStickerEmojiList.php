<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong
 * to a sticker set created by the bot. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setstickeremojilist
 *
 * Class SetStickerEmojiList
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SetStickerEmojiList extends BaseMethod
{
    /**
     * File identifier of the sticker
     * @var string
     */
    public string $sticker;

    /**
     * 	A JSON-serialized list of 1-20 emoji associated with the sticker
     * @var string[]
     */
    public $emoji_list;

    public function __construct(string $sticker, array $emoji_list)
    {
        $this->sticker = $sticker;
        $this->emoji_list = $emoji_list;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->emoji_list)) {
            $this->emoji_list = json_encode($this->emoji_list);
        }

        $this->setIsPrepared(true);
    }
}