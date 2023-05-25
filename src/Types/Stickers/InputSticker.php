<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object describes a sticker to be added to a sticker set.
 *
 * @link https://core.telegram.org/bots/api#inputsticker
 *
 * Class InputSticker
 * @package Klev\TelegramBotApi\Types\Stickers
 */
class InputSticker extends BaseType
{
    /**
     * The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers,
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using
     * multipart/form-data, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under
     * <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL
     * @var string
     */
    public string $sticker;
    /**
     * List of 1-20 emoji associated with the sticker
     * @var string[]
     */
    public array $emoji_list;
    /**
     * Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     * @var MaskPosition|null
     */
    public ?MaskPosition $mask_position;
    /**
     * Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters.
     * For “regular” and “custom_emoji” stickers only.
     * @var string[]
     */
    public ?array $keywords;
}