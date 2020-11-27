<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to kick a user from a group, a supergroup or a channel. In the case of supergroups and channels,
 * the user will not be able to return to the group on their own using invite links, etc., unless unbanned first.
 * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
 * Returns True on success.
 *
 * Class KickChatMember
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#kickchatmember
 */
class KickChatMember extends BaseMethod
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
     * Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30
     * seconds from the current time they are considered to be banned forever
     * @var int|null
     */
    public ?int $until_date;

    public function __construct($chat_id, $user_id)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
    }

}