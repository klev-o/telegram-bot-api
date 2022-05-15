<?php


namespace Klev\TelegramBotApi\Methods;


/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be
 * an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setchatphoto
 *
 * Class SetChatPhoto
 * @package Klev\TelegramBotApi\Methods
 */
class SetChatPhoto extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * New chat photo, uploaded using multipart/form-data
     * @var string
     */
    public string $photo;

    public function __construct($chat_id, string $photo)
    {
        $this->chat_id = $chat_id;
        $this->photo = $photo;
    }
}