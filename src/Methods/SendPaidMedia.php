<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\InputPaidMedia;
use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send paid media. On success, the sent Message is returned.
 *
 * Class SendPaidMedia
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendpaidmedia
 */
class SendPaidMedia extends BaseMethod
{
    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     * @var string|null
     */
    public ?string $business_connection_id;
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     * If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance.
     * Otherwise, they will be credited to the bot's balance.
     * @var string
     */
    public string $chat_id;
    /**
     * The number of Telegram Stars that must be paid to buy access to the media; 1-2500
     * @var int
     */
    public int $star_count;
    /**
     * A JSON-serialized array describing the media to be sent; up to 10 items
     * @var InputPaidMedia[]|string
     */
    public $media;
    /**
     * Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal
     * processes
     * @var string|null
     */
    public ?string $payload;
    /**
     * Media caption, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Mode for parsing entities in the media caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode;
    /**
     * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of
     * parse_mode
     * @var MessageEntity[]|string
     */
    public $caption_entities;
    /**
     * Pass True, if the caption must be shown above the message media
     * @var bool|null
     */
    public ?bool $show_caption_above_media;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content;
    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars
     * per message. The relevant Stars will be withdrawn from the bot's balance
     * @var bool|null
     */
    public ?bool $allow_paid_broadcast;
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

    public function __construct(string $chat_id, int $star_count, array $media)
    {
        $this->chat_id = $chat_id;
        $this->star_count = $star_count;
        $this->media = $media;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        $this->media = json_encode($this->media);

        if(!empty($this->caption_entities)) {
            $this->caption_entities = json_encode($this->caption_entities);
        }

        parent::preparation();
    }
}