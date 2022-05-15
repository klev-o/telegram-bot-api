<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus
 * created. You must use exactly one of the fields png_sticker or tgs_sticker. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#createnewstickerset
 *
 * Class CreateNewStickerSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class CreateNewStickerSet extends BaseMethod
{
    /**
     * User identifier of created sticker set owner
     * @var int
     */
    public int $user_id;
    /**
     * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only english
     * letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end
     * in “_by_<bot username>”. <bot_username> is case insensitive. 1-64 characters.
     * @var string
     */
    public string $name;
    /**
     * Sticker set title, 1-64 characters
     * @var string
     */
    public string $title;
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
     * Pass True, if a set of mask stickers should be created
     * @var bool|null
     */
    public ?bool $contains_masks = null;
    /**
     * A JSON-serialized object for position where the mask should be placed on faces
     * @var MaskPosition
     */
    public $mask_position = '';

    public function __construct(int $user_id, string $name, string $title, string $emojis)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->title = $title;
        $this->emojis = $emojis;
    }

    public function preparation(): void
    {
        if (!empty($this->contains_masks)) {
            $this->contains_masks = json_encode($this->contains_masks);
        }
    }
}