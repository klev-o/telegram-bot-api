<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Sends a gift to the given user. The gift can't be converted to Telegram Stars by the user. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#sendgift
 *
 * Class SendGift
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SendGift extends BaseMethod
{
    /**
     * Unique identifier of the target user that will receive the gift
     * @var int
     */
    public int $user_id;
    /**
     * Identifier of the gift
     * @var int
     */
    public int $gift_id;
    /**
     * Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
     * @var bool|null
     */
    public ?bool $pay_for_upgrade;
    /**
     * Text that will be shown along with the gift; 0-255 characters
     * @var string|null
     */
    public ?string $text;
    /**
     * Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”,
     * “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
     * @var string|null
     */
    public ?string $text_parse_mode;
    /**
     * A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of
     * text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and
     * “custom_emoji” are ignored.
     * @var MessageEntity[]|string
     */
    public $text_entities = '';


    public function __construct(int $user_id, int $gift_id)
    {
        $this->user_id = $user_id;
        $this->gift_id = $gift_id;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->text_entities)) {
            $this->text_entities = json_encode($this->text_entities);
        }

        $this->setIsPrepared(true);
    }
}