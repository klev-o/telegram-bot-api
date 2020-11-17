<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;

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
    public string $parse_mode = 'html';

    /**
     * List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $entities = null;
    /**
     * Disables link previews for links in this message
     * @var bool
     */
    public ?bool $disable_web_page_preview = false;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool
     */
    public ?bool $disable_notification = false;
    /**
     * If the message is a reply, ID of the original message
     * @var int
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = null;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $text)
    {
        $this->chat_id = $chat_id;
        $this->text = $text;
    }
}