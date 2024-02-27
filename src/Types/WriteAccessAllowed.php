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
     * Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the
     * method requestWriteAccess
     * @var bool|null
     */
    public ?bool $from_request = null;
    /**
     * Optional. Name of the Web App which was launched from a link
     * @var string|null
     */
    public ?string $web_app_name = null;
    /**
     * Optional. True, if the access was granted when the bot was added to the attachment or side menu
     * @var bool|null
     */
    public ?bool $from_attachment_menu = null;
}