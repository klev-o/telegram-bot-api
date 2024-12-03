<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send
 * video messages. On success, the sent Message is returned.
 *
 * Class SendVideoNote
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendvideonote
 */
class SendVideoNote extends BaseMethod
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
     * Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass
     * an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $video_note;
    /**
     * Duration of sent video in seconds
     * @var int|null
     */
    public ?int $duration = null;
    /**
     * Video width and height, i.e. diameter of the video message
     * @var int|null
     */
    public ?int $length = null;
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

    public function __construct(string $chat_id, string $video_note)
    {
        $this->chat_id = $chat_id;
        $this->video_note = $video_note;
    }
}