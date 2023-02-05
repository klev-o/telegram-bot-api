<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 *
 * Class ChatPermissions
 * @package Klev\TelegramBotApi\Types
 */
class ChatPermissions extends BaseType
{
    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     * @var bool|null
     */
    public ?bool $can_send_messages;
    /**
     * Optional. True, if the user is allowed to send audios
     * @var bool|null
     */
    public ?bool $can_send_audios;
    /**
     * Optional. True, if the user is allowed to send documents
     * @var bool|null
     */
    public ?bool $can_send_documents;
    /**
     * Optional. True, if the user is allowed to send photos
     * @var bool|null
     */
    public ?bool $can_send_photos;
    /**
     * Optional. True, if the user is allowed to send videos
     * @var bool|null
     */
    public ?bool $can_send_videos;
    /**
     * Optional. True, if the user is allowed to send video notes
     * @var bool|null
     */
    public ?bool $can_send_video_notes;
    /**
     * Optional. True, if the user is allowed to send voice notes
     * @var bool|null
     */
    public ?bool $can_send_voice_notes;
    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     * @var bool|null
     */
    public ?bool $can_send_polls;
    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     * @var bool|null
     */
    public ?bool $can_send_other_messages;
    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
     * @var bool|null
     */
    public ?bool $can_add_web_page_previews;
    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups
     * @var bool|null
     */
    public ?bool $can_change_info;
    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     * @var bool|null
     */
    public ?bool $can_invite_users;
    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     * @var bool|null
     */
    public ?bool $can_pin_messages;
    /**
     * Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of
     * can_pin_messages
     * @var bool|null
     */
    public ?bool $can_manage_topics = null;
}