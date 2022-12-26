<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 * Class Chat
 * @package Klev\TelegramBotApi\Types
 */
class Chat extends BaseType
{
    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may
     * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer
     * or double-precision float type are safe for storing this identifier.
     * @var int
     */
    public int $id;
    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     * @var string
     */
    public string $type;
    /**
     * Optional. Title, for supergroups, channels and group chats
     * @var string|null
     */
    public ?string $title = null;
    /**
     * Optional. Username, for private chats, supergroups and channels if available
     * @var string|null
     */
    public ?string $username = null;
    /**
     * Optional. First name of the other party in a private chat
     * @var string|null
     */
    public ?string $first_name = null;
    /**
     * Optional. Last name of the other party in a private chat
     * @var string|null
     */
    public ?string $last_name = null;
    /**
     * Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @var bool|null
     */
    public ?bool $is_forum = null;
    /**
     * Optional. Chat photo. Returned only in getChat.
     * @var ChatPhoto|null
     */
    public ?ChatPhoto $photo = null;
    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels.
     * Returned only in getChat.
     * @var string[]|null
     */
    public ?array $active_usernames = null;
    /**
     * Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
     * @var string|null
     */
    public ?string $emoji_status_custom_emoji_id = null;
    /**
     * Optional. Bio of the other party in a private chat. Returned only in getChat.
     * @var string|null
     */
    public ?string $bio = null;
    /**
     * Optional. True, if privacy settings of the other party in the private chat allows to use
     * tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_private_forwards = null;
    /**
     * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the
     * private chat. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_restricted_voice_and_video_messages = null;
    /**
     * Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $join_to_send_messages = null;
    /**
     * Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators.
     * Returned only in getChat
     * @var bool|null
     */
    public ?bool $join_by_request = null;
    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     * @var string|null
     */
    public ?string $description = null;
    /**
     * Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates
     * their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in
     * getChat.
     * @var string|null
     */
    public ?string $invite_link = null;
    /**
     * Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
     * @var Message|null
     */
    public ?Message $pinned_message = null;
    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     * @var ChatPermissions|null
     */
    public ?ChatPermissions $permissions = null;
    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each
     * unpriviledged user. Returned only in getChat.
     * @var int|null
     */
    public ?int $slow_mode_delay = null;
    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds.
     * Returned only in getChat.
     * @var int|null
     */
    public ?int $message_auto_delete_time = null;
    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_protected_content = null;
    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     * @var string|null
     */
    public ?string $sticker_set_name = null;
    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $can_set_sticker_set = null;
    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice
     * versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming
     * languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64
     * bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
     * @var int|null
     */
    public ?int $linked_chat_id = null;

    /**
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     * @var ChatLocation|null
     */
    public ?ChatLocation $location = null;

    /**
     * @param $key
     * @param $data
     * @return object|null
     */
    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'photo':
                return new ChatPhoto($data);
            case 'pinned_message':
                return new Message($data);
            case 'permissions':
                return new ChatPermissions($data);
            case 'location':
                return new ChatLocation($data);
        }

        return null;
    }
}