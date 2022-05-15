<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Use this method to send a game. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendgame
 *
 * Class SendGame
 * @package Klev\TelegramBotApi\Methods\Games
 */
class SendGame extends BaseMethod
{
    /**
     * Unique identifier for the target chat
     * @var int
     */
    public int $chat_id;
    /**
     * Short name of the game, serves as the unique identifier for the game. Set up your games via Botfather.
     * @var string
     */
    public string $game_short_name;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = null;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * If the message is a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = null;
    /**
     * A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not
     * empty, the first button must launch the game.
     * @var InlineKeyboardMarkup|string
     */
    public string $reply_markup = '';

    public function __construct(int $chat_id, string $game_short_name)
    {
        $this->chat_id = $chat_id;
        $this->game_short_name = $game_short_name;
    }
}