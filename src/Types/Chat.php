<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a chat.
 *
 * @see https://core.telegram.org/bots/api#chat
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
     * @var string
     */
    public ?string $title;
    /**
     * Optional. Username, for private chats, supergroups and channels if available
     * @var string|null
     */
    public ?string $username;
    /**
     * Optional. First name of the other party in a private chat
     * @var string|null
     */
    public ?string $first_name;
    /**
     * Optional. Last name of the other party in a private chat
     * @var string|null
     */
    public ?string $last_name;
    /**
     * Optional. Chat photo. Returned only in getChat.
     * @var ChatPhoto|null
     */
    public ?ChatPhoto $photo;
    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates
     * their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in
     * getChat.
     * @var string|null
     */
    public ?string $invite_link;
    /**
     * Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
     * @var Message|null
     */
    public ?Message $pinned_message;
    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     * @var ChatPermissions|null
     */
    public ?ChatPermissions $permissions;
    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each
     * unpriviledged user. Returned only in getChat.
     * @var int|null
     */
    public ?int $slow_mode_delay;
    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     * @var string|null
     */
    public ?string $sticker_set_name;
    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $can_set_sticker_set;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'photo':
                return new ChatPhoto($data);
            case 'permissions':
                return new ChatPermissions($data);
        }

        return null;
    }
}