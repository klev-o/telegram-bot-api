<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio
 * must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of
 * up to 50 MB in size, this limit may be changed in the future.
 *
 * For sending voice messages, use the sendVoice method instead.
 *
 * Class SendAudio
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendaudio
 */
class SendAudio extends BaseMethod
{
    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     * @var string|null
     */
    public ?string $business_connection_id = null;
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
     * Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers
     * (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a
     * new one using multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $audio;
    /**
     * Audio caption, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the audio caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Duration of the audio in seconds
     * @var int|null
     */
    public ?int $duration = null;
    /**
     * Performer
     * @var string|null
     */
    public ?string $performer = null;
    /**
     * Track name
     * @var string|null
     */
    public ?string $title = null;
    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
     * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not
     * exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be
     * only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumbnail = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
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

    public function __construct(string $chat_id, string $audio)
    {
        $this->chat_id = $chat_id;
        $this->audio = $audio;
    }
}