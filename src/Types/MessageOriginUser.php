<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The message was originally sent by a known user.
 *
 * Class MessageOriginUser
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageoriginuser
 */
final class MessageOriginUser extends MessageOrigin
{
    /**
     * User that sent the message originally
     * @var User
     */
    public User $sender_user;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'sender_user':
                return new User($data);

        }

        return parent::bindObjects($key, $data);
    }

}