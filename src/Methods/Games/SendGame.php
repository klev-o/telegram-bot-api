<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\ReplyParameters;

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
     * Unique identifier of the business connection on behalf of which the message will be sent
     * @var string|null
     */
    public ?string $business_connection_id = null;
    /**
     * Unique identifier for the target chat
     * @var int
     */
    public int $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
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
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
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