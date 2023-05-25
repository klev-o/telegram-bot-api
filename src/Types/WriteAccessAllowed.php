<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding the bot to the
 * attachment menu or launching a Web App from a link.
 *
 * @link https://core.telegram.org/bots/api#writeaccessallowed
 *
 * Class WriteAccessAllowed
 * @package Klev\TelegramBotApi\Types
 */
class WriteAccessAllowed extends BaseType
{
    /**
     * Optional. Name of the Web App which was launched from a link
     * @var string|null
     */
   public ?string $web_app_name = null;
}