<?php


namespace Klev\TelegramBotApi\Types\Games;


use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * This object represents one row of the high scores table for a game.
 *
 * @see https://core.telegram.org/bots/api#gamehighscore
 *
 * Class GameHighScore
 * @package Klev\TelegramBotApi\Types\Games
 */
class GameHighScore extends BaseType
{
    /**
     * Position in high score table for the game
     * @var int
     */
    public int $position;
    /**
     * User
     * @var User
     */
    public User $user;
    /**
     * Score
     * @var int
     */
    public int $score;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'user':
                return new User($data);
        }

        return null;
    }
}