<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @link https://core.telegram.org/bots/api#menubuttondefault
 *
 * Class MenuButtonDefault
 * @package Klev\TelegramBotApi\Types
 */
class MenuButtonDefault extends MenuButton
{
    /**
     * Type of the button, must be default
     * @var string
     */
    public string $type = MenuButton::TYPE_DEFAULT;
}