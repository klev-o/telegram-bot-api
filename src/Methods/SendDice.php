<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 *
 * Class SendDice
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#senddice
 */
class SendDice extends BaseMethod
{
    public string $chat_id;
    /**
     * Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, or “🎰”.
     * Dice can have values 1-6 for “🎲” and “🎯”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
     * @var string|null
     */
    public ?string $emoji;
    public ?bool $disable_notification;
    public ?int $reply_to_message_id;
    public ?bool $allow_sending_without_reply;
    /**
     * @var string
     */
    public $reply_markup = '';

    public function __construct($chat_id)
    {
        $this->chat_id = $chat_id;
    }
}