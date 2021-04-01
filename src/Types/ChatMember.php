<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about one member of a chat.
 *
 * @see https://core.telegram.org/bots/api#chatmember
 *
 * Class ChatMember
 * @package Klev\TelegramBotApi\Types
 */
class ChatMember extends BaseType
{
    /**
     * Information about the user
     * @var User
     */
    public User $user;
    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     * @var string
     */
    public string $status;
    /**
     * Optional. Owner and administrators only. Custom title for this user
     * @var string|null
     */
    public ?string $custom_title = null;
    /**
     * Optional. Owner and administrators only. True, if the user's presence in the chat is hidden
     * @var bool|null
     */
    public ?bool $is_anonymous = null;
    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     * @var bool|null
     */
    public ?bool $can_be_edited = null;
    /**
     * Optional. Administrators only. True, if the administrator can post in the channel; channels only
     * @var bool|null
     */
    public ?bool $can_post_messages = null;
    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin
     * messages; channels only
     * @var bool|null
     */
    public ?bool $can_edit_messages = null;
    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     * @var bool|null
     */
    public ?bool $can_delete_messages = null;
    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     * @var bool|null
     */
    public ?bool $can_restrict_members = null;
    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of their own
     * privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators
     * that were appointed by the user)
     * @var bool|null
     */
    public ?bool $can_promote_members = null;
    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and
     * other settings
     * @var bool|null
     */
    public ?bool $can_change_info = null;
    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     * @var bool|null
     */
    public ?bool $can_invite_users = null;
    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups
     * and supergroups only
     * @var bool|null
     */
    public ?bool $can_pin_messages = null;
    /**
     * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
     * @var bool|null
     */
    public ?bool $is_member = null;
    /**
     * Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     * @var bool|null
     */
    public ?bool $can_send_messages = null;
    /**
     * Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video
     * notes and voice notes
     * @var bool|null
     */
    public ?bool $can_send_media_messages = null;
    /**
     * Optional. Restricted only. True, if the user is allowed to send polls
     * @var bool|null
     */
    public ?bool $can_send_polls = null;
    /**
     * Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     * @var bool|null
     */
    public ?bool $can_send_other_messages = null;
    /**
     * Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
     * @var bool|null
     */
    public ?bool $can_add_web_page_previews = null;
    /**
     * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     * @var int|null
     */
    public ?int $until_date;

    protected function bindObjects($key, $data): ?User
    {
        switch ($key) {
            case 'user':
                return new User($data);
        }

        return null;
    }
}