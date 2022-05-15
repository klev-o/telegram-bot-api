<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat
 * for this to work and must have the appropriate admin rights. Returns the edited invite link as a ChatInviteLink
 * object
 *
 * @link https://core.telegram.org/bots/api#editchatinvitelink
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
     * Invite link name; 0-32 characters
     * @var string|null
     */
    public ?string $name;
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
    /**
     * True, if users joining the chat via the link need to be approved by chat administrators. If True,
     * member_limit can't be specified
     * @var bool|null
     */
    public ?bool $creates_join_request;

    public function __construct(string $chat_id, string $invite_link)
    {
        $this->chat_id = $chat_id;
        $this->invite_link = $invite_link;
    }
}