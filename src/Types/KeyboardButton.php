<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this
 * object to specify text of the button. Optional fields request_contact, request_location, and request_poll
 * are mutually exclusive.
 *
 * Note: request_contact and request_location options will only work in Telegram versions released after 9 April, 2016.
 * Older clients will display unsupported message. Note: request_poll option will only work in Telegram versions
 * released after 23 January, 2020. Older clients will display unsupported message.
 *
 * @link https://core.telegram.org/bots/api#keyboardbutton
 *
 * Class KeyboardButton
 * @package Klev\TelegramBotApi\Types
 */
class KeyboardButton extends BaseType
{
    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is
     * pressed
     * @var string
     */
    public string $text;
    /**
     * Optional. If specified, pressing the button will open a list of suitable users. Tapping on any user will send
     * their identifier to the bot in a “user_shared” service message. Available in private chats only.
     * @var KeyboardButtonRequestUser|null
     */
    public ?KeyboardButtonRequestUser $request_user = null;
    /**
     * Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its
     * identifier to the bot in a “chat_shared” service message. Available in private chats only.
     * @var KeyboardButtonRequestChat|null
     */
    public ?KeyboardButtonRequestChat $request_chat = null;
    /**
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available
     * in private chats only
     * @var bool|null
     */
    public ?bool $request_contact = false;
    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private
     * chats only
     * @var bool|null
     */
    public ?bool $request_location = false;
    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is
     * pressed. Available in private chats only
     * @var KeyboardButtonPollType|null
     */
    public ?KeyboardButtonPollType $request_poll = null;
    /**
     * Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be
     * able to send a “web_app_data” service message. Available in private chats only
     * @var WebAppInfo|null
     */
    public ?WebAppInfo $web_app = null;

    public function __construct($text, $request_contact = false, $request_location = false)
    {
        parent::__construct();
        $this->text = $text;
        $this->request_contact = $request_contact;
        $this->request_location = $request_location;
    }
}