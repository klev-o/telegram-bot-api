<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#senddice
 *
 * Class SendDice
 * @package Klev\TelegramBotApi\Methods
 */
class SendDice extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, or “🎰”.
     * Dice can have values 1-6 for “🎲” and “🎯”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
     * @var string|null
     */
    public ?string $emoji;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * If the message is a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct($chat_id)
    {
        $this->chat_id = $chat_id;
    }
}