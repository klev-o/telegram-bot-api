<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the
 * chat 4 times for the duration of the corresponding Telegram Premium subscription.
 *
 * Class ChatBoostSourceGiftCode
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcegiftcode
 */
final class ChatBoostSourceGiftCode extends ChatBoostSource
{
    /**
     * User for which the gift code was created
     * @var User
     */
    public User $user;

    protected function bindObjects($key, $data)
    {
        if ($key == 'user') {
            return new User($data);
        }

        return parent::bindObjects($key, $data);
    }
}