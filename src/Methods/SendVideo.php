<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document).
 * On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit
 * may be changed in the future.
 *
 * Class SendVideo
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendvideo
 */
class SendVideo extends BaseMethod
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
     * Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass
     * an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $video;
    /**
     * Duration of sent video in seconds
     * @var int|null
     */
    public ?int $duration = null;
    /**
     * Video width
     * @var int|null
     */
    public ?int $width = null;
    /**
     * Video height
     * @var int|null
     */
    public ?int $height = null;
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
     * Video caption (may also be used when resending videos by file_id), 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the video caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Pass True, if the caption must be shown above the message media
     * @var bool|null
     */
    public ?bool $show_caption_above_media = null;
    /**
     * 	Pass True if the video needs to be covered with a spoiler animation
     * @var bool|null
     */
    public ?bool $has_spoiler = false;
    /**
     * Pass True, if the uploaded video is suitable for streaming
     * @var bool|null
     */
    public ?bool $supports_streaming = null;
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
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars
     * per message. The relevant Stars will be withdrawn from the bot's balance
     * @var bool|null
     */
    public ?bool $allow_paid_broadcast = null;
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
     * @var string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $video)
    {
        $this->chat_id = $chat_id;
        $this->video = $video;
    }
}