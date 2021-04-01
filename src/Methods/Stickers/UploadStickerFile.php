<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods
 * (can be used multiple times). Returns the uploaded File on success.
 *
 * Class UploadStickerFile
 * @package Klev\TelegramBotApi\Methods\Stickers
 *
 * @see https://core.telegram.org/bots/api#uploadstickerfile
 */
class UploadStickerFile extends BaseMethod
{
    /**
     * User identifier of sticker file owner
     * @var int
     */
    public int $user_id;
    /**
     * PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either
     * width or height must be exactly 512px. More info on Sending Files »
     * @var string
     */
    public string $png_sticker;

    public function __construct($user_id, $png_sticker)
    {
        $this->user_id = $user_id;
        $this->png_sticker = $png_sticker;
    }
}