<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * Class SendMessage
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Text of the message to be sent, 1-4096 characters after entities parsing
     * @var string
     */
    public string $text;
    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     * @see https://core.telegram.org/bots/api#formatting-options
     * @var string
     */
    public $parse_mode = 'html';
    /**
     * Disables link previews for links in this message
     * @var bool
     */
    public $disable_web_page_preview = false;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool
     */
    public $disable_notification;
    /**
     * If the message is a reply, ID of the original message
     * @var int
     */
    public $reply_to_message_id;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup;

    public function __construct(string $chat_id, string $text)
    {
        $this->chat_id = $chat_id;
        $this->text = $text;
    }

    /**
     * @param string $parse_mode
     */
    public function setParseMode(string $parse_mode): void
    {
        $this->parse_mode = $parse_mode;
    }

    /**
     * @param bool $disable_web_page_preview
     */
    public function setDisableWebPagePreview(bool $disable_web_page_preview): void
    {
        $this->disable_web_page_preview = $disable_web_page_preview;
    }

    /**
     * @param bool $disable_notification
     */
    public function setDisableNotification(bool $disable_notification): void
    {
        $this->disable_notification = $disable_notification;
    }

    /**
     * @param int $reply_to_message_id
     */
    public function setReplyToMessageId(int $reply_to_message_id): void
    {
        $this->reply_to_message_id = $reply_to_message_id;
    }

    /**
     * @param KeyboardInterface $reply_markup
     */
    public function setReplyMarkup(KeyboardInterface $reply_markup): void
    {
        $this->reply_markup = $reply_markup;
    }
}