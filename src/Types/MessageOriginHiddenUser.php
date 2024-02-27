<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The message was originally sent by an unknown user.
 *
 * Class MessageOriginHiddenUser
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageoriginhiddenuser
 */
final class MessageOriginHiddenUser extends MessageOrigin
{
    /**
     * Name of the user that sent the message originally
     * @var string
     */
    public string $sender_user_name;
}