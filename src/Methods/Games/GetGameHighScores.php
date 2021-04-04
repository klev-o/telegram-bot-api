<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to get data for high score tables. Will return the score of the specified user and several of their
 * neighbors in a game. On success, returns an Array of GameHighScore objects.
 *
 * @see https://core.telegram.org/bots/api#getgamehighscores
 *
 * Class GetGameHighScores
 * @package Klev\TelegramBotApi\Methods\Games
 */
class GetGameHighScores extends BaseMethod
{
    /**
     * Target user id
     * @var int
     */
    public int $user_id;
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat
     * @var int|null
     */
    public ?int $chat_id = null;
    /**
     * Required if inline_message_id is not specified. Identifier of the sent message
     * @var int|null
     */
    public ?int $message_id = null;
    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message
     * @var string|null
     */
    public ?string $inline_message_id = null;

    public function __construct(int $user_id)
    {
        $this->user_id = $user_id;
    }
}