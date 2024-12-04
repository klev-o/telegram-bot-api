<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Types\Stickers\InputSticker;

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
     * A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     * @var InputSticker[]
     */
    public $stickers = '';
    /**
     * Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a regular sticker
     * set is created.
     * @var string|null
     */
    public ?string $sticker_type = null;
    /**
     * Pass True if stickers in the sticker set must be repainted to the color of text when used in messages, the accent
     * color if used as emoji status, white on chat photos, or another appropriate color based on context;
     * for custom emoji sticker sets only
     * @var bool|null
     */
    public ?bool $needs_repainting = null;

    public function __construct(int $user_id, string $name, string $title, array $stickers)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->title = $title;
        $this->stickers = $stickers;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->stickers)) {
            $this->stickers = json_encode($this->stickers);
            $this->setIsPrepared(true);
        }
    }

    /**
     * @throws TelegramException
     */
    public function validation()
    {
        if ($this->isPrepared()) {
            return;
        }

        $amountStickers = count($this->stickers);
        if ($amountStickers < 1 || $amountStickers > 50) {
            throw new TelegramException('Parameter "stickers" must include 1 to 50 items. In fact: '. $amountStickers . ' items');
        }

        $this->setIsPrepared(true);
    }
}