<?php

namespace Klev\TelegramBotApi\Types\InlineMode;

/**
 * Contains information about an inline message sent by a Web App on behalf of a user.
 *
 * @link https://core.telegram.org/bots/api#sentwebappmessage
 *
 * Class SentWebAppMessage
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class SentWebAppMessage
{
    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the
     * message.
     * @var string|null
     */
    public ?string $inline_message_id = null;
}