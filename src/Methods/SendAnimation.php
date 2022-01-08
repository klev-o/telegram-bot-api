<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message
 * is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
 *
 * Class SendAnimation
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendanimation
 */
class SendAnimation extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers
     * (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a
     * new animation using multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $animation;
    /**
     * Duration of sent animation in seconds
     * @var int|null
     */
    public ?int $duration = null;
    /**
     * Animation width
     * @var int|null
     */
    public ?int $width = null;
    /**
     * Animation height
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
    public ?string $thumb = null;
    /**
     * Animation caption (may also be used when resending animation by file_id), 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Mode for parsing entities in the animation caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
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
     * If the message is a reply, ID of the original message
     * @var int|null
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

    public function __construct(string $chat_id, string $animation)
    {
        $this->chat_id = $chat_id;
        $this->animation = $animation;
    }
}