<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for
 * 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status).
 * Returns True on success.
 *
 * Class SendChatAction
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendchataction
 */
class SendChatAction extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Type of action to broadcast. Choose one, depending on what the user is about to receive: typing for text
     * messages, upload_photo for photos, record_video or upload_video for videos, record_voice or upload_voice for
     * voice notes, upload_document for general files, find_location for location data, record_video_note or
     * upload_video_note for video notes.
     * @var string
     */
    public string $action;

    public function __construct($chat_id, $action)
    {
        $this->chat_id = $chat_id;
        $this->action = $action;
    }
}