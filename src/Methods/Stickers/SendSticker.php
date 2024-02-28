<?php


namespace Klev\TelegramBotApi\Methods\Stickers;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send static .WEBP or animated .TGS stickers. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendsticker
 *
 * Class SendSticker
 * @package Klev\TelegramBotApi\Methods\Stickers
 */
class SendSticker extends BaseMethod
{
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
     * Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a .WEBP file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $sticker;
    /**
     * Emoji associated with the sticker; only for just uploaded stickers
     * @var string|null
     */
    public ?string $emoji = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = null;
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
     * @var KeyboardInterface
     */
    public $reply_markup = '';

    public function __construct($chat_id, $sticker)
    {
        $this->chat_id = $chat_id;
        $this->sticker = $sticker;
    }
}