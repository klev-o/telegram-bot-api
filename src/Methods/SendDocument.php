<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of
 * any type of up to 50 MB in size, this limit may be changed in the future.
 *
 * Class SendDocument
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#senddocument
 */
class SendDocument extends BaseMethod
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
     * File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $document;
    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not
     * exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can
     * be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded
     * using multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumbnail = null;
    /**
     * Document caption (may also be used when resending documents by file_id), 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the document caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @var bool|null
     */
    public ?bool $disable_content_type_detection = null;
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
     * @var string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $document)
    {
        $this->chat_id = $chat_id;
        $this->document = $document;
    }
}