<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a
 * supergroup for this to work and must have the can_restrict_members admin rights. Returns True on success.
 *
 * Class SetChatPermissions
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#setchatpermissions
 */
class SetChatPermissions extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * New default chat permissions
     * @var ChatPermissions
     */
    public $permissions = '';
    /**
     * Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and
     * can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents,
     * can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls
     * permission will imply the can_send_messages permission.
     * @var bool|null
     */
    public ?bool $use_independent_chat_permissions = null;

    public function  __construct($chat_id, ChatPermissions $permissions)
    {
        $this->chat_id = $chat_id;
        $this->permissions = $permissions;
    }

    public function preparation(): void
    {
        if (!empty($this->permissions)) {
            $this->$this->permissions = json_encode($this->permissions);
        }
    }
}