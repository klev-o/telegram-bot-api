<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only.
 * Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#deletestickerfromset
 *
 * Class SetStickerSetThumb
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SetStickerSetThumb extends BaseMethod
{
    /**
     * Sticker set name
     * @var string
     */
    public string $name;
    /**
     * User identifier of the sticker set owner
     * @var int
     */
    public int $user_id;
    /**
     * A PNG image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or
     * a TGS animation with the thumbnail up to 32 kilobytes in size; see
     * https://core.telegram.org/animated_stickers#technical-requirements for animated sticker technical requirements.
     * Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a
     * String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info
     * on Sending Files ». Animated sticker set thumbnail can't be uploaded via HTTP URL
     *
     * @var string|null
     */
    public ?string $thumb = null;

    public function __construct(string $name, int $user_id)
    {
        $this->name = $name;
        $this->user_id = $user_id;
    }
}