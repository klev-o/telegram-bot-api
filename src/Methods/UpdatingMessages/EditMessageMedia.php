<?php


namespace Klev\TelegramBotApi\Methods\UpdatingMessages;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Methods\SendMedia;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\InputMedia;

/**
 * Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages.
 * If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document
 * for document albums and to a photo or a video otherwise. When an inline message is edited, a new file
 * can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message
 * is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages
 * that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the
 * time they were sent..
 *
 * @link https://core.telegram.org/bots/api#editmessagemedia
 *
 * Class EditMessageMedia
 * @package Klev\TelegramBotApi\Methods\UpdatingMessages
 */
class EditMessageMedia extends BaseMethod implements SendMedia
{
    /**
     * Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var string|null
     */
    public ?string $business_connection_id;
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     * @var string|null
     */
    public ?string $chat_id = null;
    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit
     * @var string|null
     */
    public ?string $message_id = null;
    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message
     * @var string|null
     */
    public ?string $inline_message_id = null;
    /**
     * A JSON-serialized object for a new media content of the message
     * @var InputMedia
     */
    public $media;

    /**
     * A JSON-serialized object for an inline keyboard.
     * @var InlineKeyboardMarkup|null
     */
    public $reply_markup = '';

    public function __construct(InputMedia $media)
    {
        $this->media = $media;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        $this->media = json_encode($this->media);
        parent::preparation();
    }
}