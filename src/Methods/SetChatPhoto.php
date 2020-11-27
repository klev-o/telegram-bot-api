<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be
 * an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * Class SetChatPhoto
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#setchatphoto
 *
 */
class SetChatPhoto extends BaseMethod
{
    /**
     * @var string
     */
    public string $chat_id;
    public string $photo;

    public function __construct($chat_id, $photo)
    {
        $this->chat_id = $chat_id;
        $this->photo = $photo;
    }
}