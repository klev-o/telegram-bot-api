<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\ChatPermissions;

/**
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to
 * work and must have the appropriate admin rights. Pass True for all permissions to lift restrictions from a user.
 * Returns True on success.
 *
 * Class RestrictChatMember
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#restrictchatmember
 */
class RestrictChatMember extends BaseMethod
{
    /**
     * Unique identifier for the target group or username of the target supergroup or channel
     * (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
    /**
     * A JSON-serialized object for new user permissions
     * @var ChatPermissions
     */
    public $permissions = '';
    /**
     * Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or
     * less than 30 seconds from the current time, they are considered to be restricted forever
     * @var int|null
     */
    public ?int $until_date = null;

    public function __construct($chat_id, $user_id, ChatPermissions $permissions)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
        $this->permissions = $permissions;
    }

    public function preparation(): void
    {
        if (!empty($this->permissions)) {
            $this->permissions = json_encode($this->permissions);
        }
    }
}