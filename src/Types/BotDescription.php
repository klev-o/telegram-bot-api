<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents the bot's description.
 *
 * Class BotDescription
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#botdescription
 */
class BotDescription extends BaseType
{
    /**
     * The bot's description
     * @var string
     */
    public string $description;
}