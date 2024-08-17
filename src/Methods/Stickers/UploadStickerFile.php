<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\InputSticker;

/**
 * Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods
 * (can be used multiple times). Returns the uploaded File on success.
 *
 * @link https://core.telegram.org/bots/api#uploadstickerfile
 *
 * Class UploadStickerFile
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class UploadStickerFile extends BaseMethod
{
    /**
     * User identifier of sticker file owner
     * @var int
     */
    public int $user_id;
    /**
     * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements.
     * @var InputSticker
     */
    public $sticker;
    /**
     * Format of stickers in the set, must be one of “static”, “animated”, “video”
     * @var string
     */
    public string $sticker_format;

    public function __construct(int $user_id, InputSticker $sticker, string $sticker_format)
    {
        $this->user_id = $user_id;
        $this->sticker = $sticker;
        $this->sticker_format = $sticker_format;
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