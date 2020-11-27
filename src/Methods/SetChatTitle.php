<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an
 * administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * Class SetChatTitle
 * @package Klev\TelegramBotApi\Methods
 *
 * https://core.telegram.org/bots/api#setchattitle
 */
class SetChatTitle extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * New chat title, 1-255 characters
     * @var string
     */
    public string $title;

    public function __construct(string $chat_id, string $title)
    {
        $this->chat_id = $chat_id;
        $this->title = $title;
    }
}