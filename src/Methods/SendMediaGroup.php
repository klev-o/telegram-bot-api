<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Types\InputMedia;

/**
 * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be
 * only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
 *
 * Class SendMediaGroup
 * @package Klev\TelegramBotApi\Methods
 */
class SendMediaGroup extends BaseMethod implements SendMedia
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @var InputMedia[]
     */
    public $media; //todo
    /**
     * Sends messages silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * If the messages are a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = null;

    public function __construct(string $chat_id, array $media)
    {
        $this->chat_id = $chat_id;
        $this->media = $media;
    }

    public function preparation()
    {
        $this->media = json_encode($this->media);
        return $this;
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