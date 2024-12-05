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
     * Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to
     * mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     * @var string|null
     */
    public ?string $url = null;
    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     * @var string|null
     */
    public ?string $callback_data = null;
    /**
     * Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be
     * able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
     * Available only in private chats between a user and the bot.
     * @var WebAppInfo|null
     */
    public ?WebAppInfo $web_app = null;
    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for
     * the Telegram Login Widget.
     * @var LoginUrl|null
     */
    public ?LoginUrl $login_url = null;
    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot's username and the specified inline query in the input field. May be empty, in which case just
     * the bot's username will be inserted. Not supported for messages sent on behalf of a Telegram Business account.
     * @var string|null
     */
    public ?string $switch_inline_query = null;
    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the
     * current chat's input field. May be empty, in which case only the bot's username will be inserted.
     *
     * This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting
     * something from multiple options. Not supported in channels and for messages sent on behalf of a
     * Telegram Business account.
     * @var string|null
     */
    public ?string $switch_inline_query_current_chat = null;
    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type,
     * open that chat and insert the bot's username and the specified inline query in the input field. Not supported
     * for messages sent on behalf of a Telegram Business account.
     */
    public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null;
    /**
     * Optional. Description of the game that will be launched when the user presses the button.
     * NOTE: This type of button must always be the first button in the first row.
     * @var CallbackGame|null
     */
    public ?CallbackGame $callback_game = null;
    /**
     * Optional. Specify True, to send a Pay button. Substrings “⭐” and “XTR” in the buttons's text will be replaced
     * with a Telegram Star icon.
     * NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     * @var bool
     */
    public ?bool $pay = null;

    public function bindObjects($key, $data)
    {
        switch ($key) {
            case 'web_app':
                return new WebAppInfo($data);
            case 'login_url':
                return new LoginUrl($data);
            case 'switch_inline_query_chosen_chat':
                return new SwitchInlineQueryChosenChat($data);
            case 'callback_game':
                return new CallbackGame($data);
        }
        return parent::bindObjects($key, $data);
    }
}