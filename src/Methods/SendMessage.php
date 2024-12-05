<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\LinkPreviewOptions;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * Class SendMessage
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends BaseMethod
{
    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     * @var string|null
     */
    public ?string $business_connection_id;
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Text of the message to be sent, 1-4096 characters after entities parsing
     * @var string
     */
    public string $text;
    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     * @link https://core.telegram.org/bots/api#formatting-options
     * @var string
     */
    public string $parse_mode = 'html';

    /**
     * List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $entities = null;
    /**
     * Link preview generation options for the message
     * @var LinkPreviewOptions|null
     */
    public ?LinkPreviewOptions $link_preview_options = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     * @var string|null
     */
    public ?string $message_effect_id = null;
    /**
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
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