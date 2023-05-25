<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents the bot's short description.
 *
 * Class BotShortDescription
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#botshortdescription
 */
class BotShortDescription extends BaseType
{
    /**
     * The bot's short description
     * @var string
     */
    public string $short_description;
}