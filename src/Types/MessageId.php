<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a unique message identifier.
 *
 * Class MessageId
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#messageid
 */
class MessageId extends BaseType
{
    /**
     * Unique message identifier
     * @var int
     */
    public int $message_id;
}