<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains full information about a chat.
 *
 * @link https://core.telegram.org/bots/api#chatfullinfo
 *
 * Class ChatFullInfo
 * @package Klev\TelegramBotApi\Types
 */
class ChatFullInfo extends BaseType
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
     * The maximum number of reactions that can be set on a message in the chat
     * @var int
     */
    public int $max_reaction_count;
    /**
     * Optional. Chat photo. Returned only in getChat.
     * @var ChatPhoto|null
     */
    public ?ChatPhoto $photo = null;
    /**
     * Optional. For private chats with business accounts, the intro of the business
     * @var BusinessIntro|null
     */
    public ?BusinessIntro $business_intro = null;
    /**
     * Optional. For private chats with business accounts, the location of the business
     * @var BusinessLocation|null
     */
    public ?BusinessLocation $business_location = null;
    /**
     * Optional. For private chats with business accounts, the opening hours of the business
     * @var BusinessOpeningHours|null
     */
    public ?BusinessOpeningHours $business_opening_hours  = null;
    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels.
     * Returned only in getChat.
     * @var string[]|null
     */
    public ?array $active_usernames = null;
    /**
     * Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     * Returned only in getChat.
     * @var ReactionType[]|null
     */
    public ?array $available_reactions = null;
    /**
     * Optional. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and
     * link preview. See accent colors for more details. Returned only in getChat. Always returned in getChat.
     * @var int|null
     */
    public ?int $accent_color_id = null;
    /**
     * Optional. Custom emoji identifier of emoji chosen by the chat for the reply header and link preview background.
     * Returned only in getChat.
     * @var string|null
     */
    public ?string $background_custom_emoji_id = null;
    /**
     * Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more
     * details. Returned only in getChat.
     * @var int|null
     */
    public ?int $profile_accent_color_id = null;
    /**
     * Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background.
     * Returned only in getChat.
     * @var string|null
     */
    public ?string $profile_background_custom_emoji_id = null;
    /**
     * Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
     * @var string|null
     */
    public ?string $emoji_status_custom_emoji_id = null;
    /**
     * Optional. Expiration date of the emoji status of the other party in a private chat in Unix time, if any.
     * Returned only in getChat.
     * @var int|null
     */
    public ?int $emoji_status_expiration_date = null;
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
     * Optional. True, if paid media messages can be sent or forwarded to the channel chat.
     * The field is available only for channel chats.
     * @var bool|null
     */
    public ?bool $can_send_paid_media = null;
    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each
     * unpriviledged user. Returned only in getChat.
     * @var int|null
     */
    public ?int $slow_mode_delay = null;
    /**
     * Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to
     * ignore slow mode and chat permissions. Returned only in getChat.
     * @var int|null
     */
    public ?int $unrestrict_boost_count = null;
    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds.
     * Returned only in getChat.
     * @var int|null
     */
    public ?int $message_auto_delete_time = null;
    /**
     * Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat
     * administrators. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_aggressive_anti_spam_enabled = null;
    /**
     * Optional. True, if non-administrators can only get the list of bots and administrators in the chat.
     * Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_hidden_members = null;
    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_protected_content = null;
    /**
     * Optional. True, if new chat members will have access to old messages; available only to chat administrators.
     * Returned only in getChat.
     * @var bool|null
     */
    public ?bool $has_visible_history = null;
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
     * Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be
     * used by all users and bots in the group. Returned only in getChat.
     * @var string|null
     */
    public ?string $custom_emoji_sticker_set_name = null;
    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice
     * versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming
     * languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64
     * bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
     * @var int|null
     */
    public ?int $linked_chat_id = null;
    /**
     * Optional. For private chats, the personal channel of the user
     * @var Chat|null
     */
    public ?Chat $personal_chat = null;
    /**
     * Optional. For private chats, the date of birth of the user
     * @var Birthdate|null
     */
    public ?Birthdate $birthdate = null;

    /**
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     * @var ChatLocation|null
     */
    public ?ChatLocation $location = null;

    protected function bindObjects($key, $data)
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
            case 'available_reactions':
                $result = [];
                foreach ($data as $reaction) {
                    switch ($reaction['type']) {
                        case ReactionType::TYPE_EMOJI:
                            $result[] = new ReactionTypeEmoji($data);
                            break;
                        case ReactionType::TYPE_CUSTOM_EMOJI:
                            $result[] = new ReactionTypeCustomEmoji($data);
                            break;
                        case ReactionType::TYPE_PAID:
                            $result[] = new ReactionTypePaid($data);
                            break;
                    }
                }
                return $result;
        }

        return null;
    }
}