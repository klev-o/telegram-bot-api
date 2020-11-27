<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 *
 * Class GetChatMember
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#getchatmember
 */
class GetChatMember extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;

    public function __construct($chat_id, $user_id)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
    }
}