<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 *
 * Class ChatBoostSourcePremium
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcepremium
 */
final class ChatBoostSourcePremium extends ChatBoostSource
{
    /**
     * User that boosted the chat
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