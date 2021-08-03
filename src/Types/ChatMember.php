<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members
 * are supported:
 *
 * ChatMemberOwner
 * ChatMemberAdministrator
 * ChatMemberMember
 * ChatMemberRestricted
 * ChatMemberLeft
 * ChatMemberBanned
 *
 * @see https://core.telegram.org/bots/api#chatmember
 *
 * Class ChatMember
 * @package Klev\TelegramBotApi\Types
 */
abstract class ChatMember extends BaseType
{
    public const TYPE_CREATOR = 'creator';
    public const TYPE_ADMINISTRATOR = 'administrator';
    public const TYPE_MEMBER = 'member';
    public const TYPE_RESTRICTED = 'restricted';
    public const TYPE_LEFT = 'left';
    public const TYPE_KICKED = 'kicked';
    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     * @var string
     */
    public string $status = '';
    /**
     * Information about the user
     * @var User
     */
    public User $user;

    protected function bindObjects($key, $data): ?User
    {
        switch ($key) {
            case 'user':
                return new User($data);
        }

        return null;
    }
}