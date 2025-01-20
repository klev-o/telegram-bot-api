<?php

namespace Klev\TelegramBotApi\Types\InlineMode;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 *
 * @link https://core.telegram.org/bots/api#preparedinlinemessage
 *
 * Class PreparedInlineMessage
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class PreparedInlineMessage extends BaseType
{
    /**
     * Unique identifier of the prepared message
     * @var string
     */
    public string $id;
    /**
     * Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
     * @var int
     */
    public int $expiration_date;
}