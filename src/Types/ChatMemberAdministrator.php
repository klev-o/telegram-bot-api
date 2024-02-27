<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a chat member that has some additional privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 *
 * Class ChatMemberAdministrator
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberAdministrator extends ChatMember
{
    /**
     * The member's status in the chat, always “administrator”
     * @var string
     */
    public string $status = self::TYPE_ADMINISTRATOR;
    /**
     * True, if the bot is allowed to edit administrator privileges of that user
     * @var bool
     */
    public bool $can_be_edited;
    /**
     * True, if the user's presence in the chat is hidden
     * @var bool
     */
    public bool $is_anonymous;
    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels,
     * see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other
     * administrator privilege
     * @var bool
     */
    public bool $can_manage_chat;
    /**
     * True, if the administrator can delete messages of other users
     * @var bool
     */
    public bool $can_delete_messages;
    /**
     * TODO: delete after delete in telegram api
     * True, if the administrator can manage voice chats
     * @var bool
     */
    public bool $can_manage_voice_chats;
    /**
     * True, if the administrator can manage video chats
     * @var bool
     */
    public bool $can_manage_video_chats;
    /**
     * True, if the administrator can restrict, ban or unban chat members
     * @var bool
     */
    public bool $can_restrict_members;
    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote
     * administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by
     * the user)
     * @var bool
     */
    public bool $can_promote_members;
    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     * @var bool
     */
    public bool $can_change_info;
    /**
     * True, if the user is allowed to invite new users to the chat
     * @var bool
     */
    public bool $can_invite_users;
    /**
     * True, if the administrator can post stories to the chat
     * @var bool
     */
    public bool $can_post_stories;
    /**
     * True, if the administrator can edit stories posted by other users
     * @var bool
     */
    public bool $can_edit_stories;
    /**
     * True, if the administrator can delete stories posted by other users
     * @var bool
     */
    public bool $can_delete_stories;
    /**
     * Optional. True, if the administrator can post in the channel; channels only
     * @var bool|null
     */
    public ?bool $can_post_messages = null;
    /**
     * Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
     * @var bool|null
     */
    public ?bool $can_edit_messages = null;
    /**
     * Optional. True, if the user is allowed to pin messages; groups and supergroups only
     * @var bool|null
     */
    public ?bool $can_pin_messages = null;
    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     * @var bool|null
     */
    public ?bool $can_manage_topics = null;
    /**
     * Optional. Custom title for this user
     * @var string|null
     */
    public ?string $custom_title = null;

}