<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus
 * created. You must use exactly one of the fields png_sticker or tgs_sticker. Returns True on success.
 *
 * Class CreateNewStickerSet
 * @package Klev\TelegramBotApi\Methods\Stickers
 *
 * @see https://core.telegram.org/bots/api#createnewstickerset
 */
class CreateNewStickerSet extends BaseMethod
{
    /**
     * User identifier of created sticker set owner
     * @var int
     */
    public int $user_id;
    public string $name;
    public string $title;
    public ?string $png_sticker = null;
    public ?string $tgs_sticker = null;
    public string $emojis;
    public ?bool $contains_masks = null;
    /**
     * A JSON-serialized object for position where the mask should be placed on faces
     * @var MaskPosition
     */
    public $mask_position = '';

    public function __construct($user_id, $name, $title, $emojis)
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