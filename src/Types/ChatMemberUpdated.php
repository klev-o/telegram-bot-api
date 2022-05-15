<?php


namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\TelegramHelper;

/**
 * This object represents changes in the status of a chat member.
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 *
 * Class ChatMemberUpdated
 * @package Klev\TelegramBotApi\Types
 */
class ChatMemberUpdated extends BaseType
{
    /**
     * Chat the user belongs to
     * @var Chat
     */
    public Chat $chat;
    /**
     * Performer of the action, which resulted in the change
     * @var User
     */
    public User $from;
    /**
     * Date the change was done in Unix time
     * @var int
     */
    public int $date;
    /**
     * 	Previous information about the chat member
     * @var ChatMember
     */
    public ChatMember $old_chat_member;
    /**
     * New information about the chat member
     * @var ChatMember
     */
    public ChatMember $new_chat_member;
    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @var ChatInviteLink|null
     */
    public ?ChatInviteLink $invite_link = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
            case 'from':
                return new User($data);
            case 'old_chat_member':
            case 'new_chat_member':
                return TelegramHelper::getChatMember($data);
            case 'invite_link':
                return new ChatInviteLink($data);
        }

        return null;
    }
}