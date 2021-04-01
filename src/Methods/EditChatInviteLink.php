<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat
 * for this to work and must have the appropriate admin rights. Returns the edited invite link as a ChatInviteLink
 * object
 *
 * @see https://core.telegram.org/bots/api#editchatinvitelink
 *
 * Class EditChatInviteLink
 * @package Klev\TelegramBotApi\Methods
 */
class EditChatInviteLink extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * The invite link to edit
     * @var string
     */
    public string $invite_link;
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
}