<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the origin of a message. It can be one of
 *
 * MessageOriginUser
 * MessageOriginHiddenUser
 * MessageOriginChat
 * MessageOriginChannel
 *
 * Class MessageOrigin
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageorigin
 */
abstract class MessageOrigin extends BaseType
{
    public const TYPE_USER = 'user';
    public const TYPE_HIDDEN_USER = 'hidden_user';
    public const TYPE_CHAT = 'chat';
    public const TYPE_CHANNEL = 'channel';
    /**
     * Type of the message origin
     * @var string
     */
    protected string $type;
    /**
     * Date the message was sent originally in Unix time
     * @var int
     */
    protected int $date;
}