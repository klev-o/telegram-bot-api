<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 * MenuButtonCommands
 * MenuButtonWebApp
 * MenuButtonDefault
 *
 * If a menu button other than MenuButtonDefault is set for a private chat, then it is applied in the chat.
 * Otherwise the default menu button is applied. By default, the menu button opens the list of bot commands.
 *
 * @link https://core.telegram.org/bots/api#menubutton
 *
 * Class MenuButton
 * @package Klev\TelegramBotApi\Types
 */
abstract class MenuButton extends BaseType
{
    public const TYPE_COMMANDS = 'commands';
    public const TYPE_WEB_APP = 'web_app';
    public const TYPE_DEFAULT = 'default';

    /**
     * Type of the button. Can be “commands”, “web_app”, “default”.
     * @var string
     */
    public string $type;
}