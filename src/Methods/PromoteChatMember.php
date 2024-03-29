<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the
 * chat for this to work and must have the appropriate admin rights. Pass False for all boolean parameters to demote
 * a user. Returns True on success.
 *
 * Class PromoteChatMember
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#promotechatmember
 */
class PromoteChatMember extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
    /**
     * Pass True, if the administrator's presence in the chat is hidden
     * @var bool|null
     */
    public ?bool $is_anonymous;
    /**
     * Pass True, if the administrator can access the chat event log, chat statistics, message statistics in channels,
     * see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other
     * administrator privilege
     * @var bool|null
     */
    public ?bool $can_manage_chat;
    /**
     * Pass True, if the administrator can create channel posts, channels only
     * @var bool|null
     */
    public ?bool $can_post_messages;
    /**
     * Pass True, if the administrator can edit messages of other users and can pin messages, channels only
     * @var bool|null
     */
    public ?bool $can_edit_messages;
    /**
     * Pass True, if the administrator can delete messages of other users
     * @var bool|null
     */
    public ?bool $can_delete_messages;
    /**
     * Pass True, if the administrator can manage video chats
     * @var bool|null
     */
    public ?bool $can_manage_video_chats;
    /**
     * TODO: delete after delete in telegram api
     * Pass True, if the administrator can manage voice chats
     * @var bool|null
     */
    public ?bool $can_manage_voice_chats;
    /**
     * Pass True, if the administrator can restrict, ban or unban chat members
     * @var bool|null
     */
    public ?bool $can_restrict_members;
    /**
     * Pass True, if the administrator can add new administrators with a subset of their own privileges or demote
     * administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed
     * by him)
     * @var bool|null
     */
    public ?bool $can_promote_members;
    /**
     * Pass True, if the administrator can change chat title, photo and other settings
     * @var bool|null
     */
    public ?bool $can_change_info;
    /**
     * Pass True, if the administrator can invite new users to the chat
     * @var bool|null
     */
    public ?bool $can_invite_users;
    /**
     * Pass True if the administrator can post stories to the chat
     * @var bool|null
     */
    public ?bool $can_post_stories;
    /**
     * Pass True if the administrator can edit stories posted by other users
     * @var bool|null
     */
    public ?bool $can_edit_stories;
    /**
     * Pass True if the administrator can delete stories posted by other users
     * @var bool|null
     */
    public ?bool $can_delete_stories;
    /**
     * Pass True, if the administrator can pin messages, supergroups only
     * @var bool|null
     */
    public ?bool $can_pin_messages;
    /**
     * Pass True if the user is allowed to create, rename, close, and reopen forum topics, supergroups only
     * @var bool|null
     */
    public ?bool $can_manage_topics = null;

    public function __construct($chat_id, $user_id)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
    }
}