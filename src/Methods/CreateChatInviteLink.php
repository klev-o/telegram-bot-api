<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for
 * this to work and must have the appropriate admin rights. The link can be revoked using the method
 * revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 *
 * @see https://core.telegram.org/bots/api#createchatinvitelink
 *
 * Class CreateChatInviteLink
 * @package Klev\TelegramBotApi\Methods
 */
class CreateChatInviteLink extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Point in time (Unix timestamp) when the link will expire
     * @var int|null
     */
    public ?int $expire_date;
    /**
     * Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite
     * link; 1-99999
     * @var int|null
     */
    public ?int $member_limit;

    public function __construct($chat_id)
    {
        $this->chat_id = $chat_id;
    }
}