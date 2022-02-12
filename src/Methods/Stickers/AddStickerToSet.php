<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker
 * or tgs_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can
 * have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#addstickertoset
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
     * PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either
     * width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the
     * Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new
     * one using multipart/form-data. More info on Sending Files »
     * @var string|null
     */
    public ?string $png_sticker = null;
    /**
     * TGS animation with the sticker, uploaded using multipart/form-data.
     * See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements
     * @var string|null
     */
    public ?string $tgs_sticker = null;
    /**
     * WEBM video with the sticker, uploaded using multipart/form-data.
     * See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
     * @var string|null
     */
    public ?string $webm_sticker = null;
    /**
     * One or more emoji corresponding to the sticker
     * @var string
     */
    public string $emojis;
    /**
     * A JSON-serialized object for position where the mask should be placed on faces
     * @var MaskPosition|null
     */
    public $mask_position = '';

    public function __construct(int $user_id, string $name, string $emojis)
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