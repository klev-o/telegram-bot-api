<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents the bot's name.
 *
 * Class BotName
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#botname
 */
class BotName extends BaseType
{
    /**
     * The bot's name
     * @var string
     */
    public string $name;
}