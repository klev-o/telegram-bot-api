<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\MenuButton;
use Klev\TelegramBotApi\Types\MenuButtonDefault;

/**
 * Use this method to change the bot's menu button in a private chat, or the default menu button.
 * Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setchatmenubutton
 *
 * Class SetChatDescription
 * @package Klev\TelegramBotApi\Methods
 */
class SetChatMenuButton extends BaseMethod
{
    /**
     * Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @var int|null
     */
    public ?int $chat_id = null;
    /**
     * A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     * @var MenuButton[]|string
     */
    public $menu_button = null;

    public function preparation(): void
    {
        $this->menu_button = $this->menu_button ?? new MenuButtonDefault();
        $this->menu_button = json_encode($this->menu_button);
    }
}