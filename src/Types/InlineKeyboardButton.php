<?php


namespace Klev\TelegramBotApi\Types;


use Klev\TelegramBotApi\Types\Games\CallbackGame;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * Class InlineKeyboardButton
 * @package Klev\TelegramBotApi\Types
 */
class InlineKeyboardButton extends BaseType
{
    /**
     * Label text on the button
     * @var string
     */
    public string $text;
    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed
     * @var string|null
     */
    public ?string $url = '';
    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for
     * the Telegram Login Widget.
     * @var LoginUrl|null
     */
    public ?LoginUrl $login_url = null;
    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     * @var string|null
     */
    public ?string $callback_data = '';
    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot's username and the specified inline query in the input field. Can be empty, in which case just
     * the bot's username will be inserted.
     *
     * Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a
     * private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be
     * automatically returned to the chat they switched from, skipping the chat selection screen.
     * @var string|null
     */
    public ?string $switch_inline_query = '';
    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in
     * the current chat's input field. Can be empty, in which case only the bot's username will be inserted.
     *
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting
     * something from multiple options.
     * @var string|null
     */
    public ?string $switch_inline_query_current_chat = '';
    /**
     * Optional. Description of the game that will be launched when the user presses the button.
     * NOTE: This type of button must always be the first button in the first row.
     * @var CallbackGame|null
     */
    public ?CallbackGame $callback_game = null;
    /**
     * Optional. Specify True, to send a Pay button.
     * NOTE: This type of button must always be the first button in the first row.
     * @var bool
     */
    public ?bool $pay = false;

    public function bindObjects($key, $data)
    {
        switch ($key) {
            case 'login_url':
                return new LoginUrl($data);
            case 'callback_game':
                return new CallbackGame($data);
        }
        return parent::bindObjects($key, $data);
    }
}