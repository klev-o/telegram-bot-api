<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Types\InputMedia;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be
 * only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
 *
 * @link https://core.telegram.org/bots/api#sendmediagroup
 *
 * Class SendMediaGroup
 * @package Klev\TelegramBotApi\Methods
 */
class SendMediaGroup extends BaseMethod implements SendMedia
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
     * A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @var InputMedia[]
     */
    public $media = '';
    /**
     * Sends messages silently. Users will receive a notification with no sound.
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

    public function __construct(string $chat_id, array $media)
    {
        $this->chat_id = $chat_id;
        $this->media = $media;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        $this->media = json_encode($this->media);

        $this->setIsPrepared(true);
    }

    /**
     * @throws TelegramException
     */
    public function validation()
    {
        $amountMedia = count($this->media);
        if ($amountMedia < 2 || $amountMedia > 10) {
            throw new TelegramException('Parameter "media" must include 2 to 10 items. In fact: '. $amountMedia . ' items');
        }
    }
}