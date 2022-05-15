<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot,
 * returns the edited Message, otherwise returns True. Returns an error, if the new score is not greater than the
 * user's current score in the chat and force is False.
 *
 * @link https://core.telegram.org/bots/api#setgamescore
 *
 * Class SetGameScore
 * @package Klev\TelegramBotApi\Methods\Games
 */
class SetGameScore extends BaseMethod
{
    /**
     * User identifier
     * @var int
     */
    public int $user_id;
    /**
     * New score, must be non-negative
     * @var int
     */
    public int $score;
    /**
     * Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @var bool|null
     */
    public ?bool $force = null;
    /**
     * Pass True, if the game message should not be automatically edited to include the current scoreboard
     * @var bool|null
     */
    public ?bool $disable_edit_message = null;
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

    public function __construct(int $user_id, int $score)
    {
        $this->user_id = $user_id;
        $this->score = $score;
    }
}