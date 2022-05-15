<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Contains data sent from a Web App to the bot.
 *
 * @link https://core.telegram.org/bots/api#webappdata
 *
 * Class WebAppInfo
 * @package Klev\TelegramBotApi\Types
 */
class WebAppData extends BaseType
{
    /**
     * The data. Be aware that a bad client can send arbitrary data in this field.
     * @var string|null
     */
    public ?string $data = null;
    /**
     * Text of the web_app keyboard button, from which the Web App was opened. Be aware that a bad client can send
     * arbitrary data in this field.
     * @var string|null
     */
    public ?string $button_text = null;
}