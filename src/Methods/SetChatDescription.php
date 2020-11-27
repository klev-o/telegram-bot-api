<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator
 * in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * Class SetChatDescription
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#setchatdescription
 */
class SetChatDescription extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * New chat description, 0-255 characters
     * @var string
     */
    public string $description;

    public function __construct($chat_id, $description)
    {
        $this->chat_id = $chat_id;
        $this->description = $description;
    }
}