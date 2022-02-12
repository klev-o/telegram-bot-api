<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display
 * unsupported message.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * Class InlineKeyboardMarkup
 * @package Klev\TelegramBotApi\Types
 */
class InlineKeyboardMarkup extends BaseType implements KeyboardInterface
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     * @var InlineKeyboardButton[][]
     */
    public array $inline_keyboard;

    public function addItem($item)
    {
        $this->inline_keyboard[] = $item;
    }

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'inline_keyboard':
                $result = [];
                foreach ($data as $array) {
                    $items = [];
                    foreach ($array as $item) {
                        $items[] = new InlineKeyboardButton($item);
                    }
                    $result[] = $items;
                }
                return $result;
        }

        return parent::bindObjects($key, $data);
    }
}