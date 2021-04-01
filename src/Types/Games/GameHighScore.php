<?php


namespace Klev\TelegramBotApi\Types\Games;


use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

class GameHighScore extends BaseType
{
    public int $position;
    public User $user;
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