<?php

namespace Klev\TelegramBotApi\Methods\Stickers;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send static .WEBP or animated .TGS stickers. On success, the sent Message is returned.
 *
 * Class SendSticker
 * @package Klev\TelegramBotApi\Methods\Stickers
 *
 * @see https://core.telegram.org/bots/api#sendsticker
 */
class SendSticker extends BaseMethod
{
    public string $chat_id;
    public string $sticker;
    public ?bool $disable_notification = null;
    public ?int $reply_to_message_id = null;
    public ?bool $allow_sending_without_reply = null;
    /**
     * @var KeyboardInterface
     */
    public $reply_markup = '';

    public function __construct($chat_id, $sticker)
    {
        $this->chat_id = $chat_id;
        $this->sticker = $sticker;
    }
}