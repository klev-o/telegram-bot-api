<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to unban a previously kicked user in a supergroup or channel. The user will not return to the group
 * or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work.
 * By default, this method guarantees that after the call the user is not a member of the chat, but will be able to
 * join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this,
 * use the parameter only_if_banned. Returns True on success.
 *
 * Class UnbanChatMember
 * @package Klev\TelegramBotApi\Methods
 */
class UnbanChatMember extends BaseMethod
{
    /**
     * Unique identifier for the target group or username of the target supergroup or channel
     * (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
    /**
     * Do nothing if the user is not banned
     * @var bool|null
     */
    public ?bool $only_if_banned;

    public function __construct($chat_id, $user_id)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
    }
}