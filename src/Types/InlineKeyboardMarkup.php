<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * Class InlineKeyboardMarkup
 * @package Klev\TelegramBotApi\Types
 *
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display
 * unsupported message.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup implements KeyboardInterface
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     * @var InlineKeyboardButton[][]
     */
    public array $inline_keyboard;

    public function addItem($item) //todo
    {
        $this->inline_keyboard[] = $item;
    }
}