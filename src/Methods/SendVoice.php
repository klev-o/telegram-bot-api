<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message.
 * For this to work, your audio must be in an .OGG file encoded with OPUS (other formats may be sent as Audio or
 * Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in
 * size, this limit may be changed in the future.
 *
 * Class SendVoice
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendvoice
 */
class SendVoice extends BaseMethod
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
     * Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $voice;
    /**
     * Voice message caption, 0-1024 characters after entities parsing
     * @var string
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @var string
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Duration of the voice message in seconds
     * @var Integer
     */
    public ?int $duration = null;
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

    public function __construct(string $chat_id, string $voice)
    {
        $this->chat_id = $chat_id;
        $this->voice = $voice;
    }
}