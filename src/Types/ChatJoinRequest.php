<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a join request sent to a chat
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Class ChatJoinRequest
 * @package Klev\TelegramBotApi\Types
 */
class ChatJoinRequest extends BaseType
{
    /**
     * Chat to which the request was sent
     * @var Chat
     */
    public Chat $chat;
    /**
     * User that sent the join request
     * @var User
     */
    public User $from;
    /**
     * Date the request was sent in Unix time
     * @var int
     */
    public int $date;
    /**
     * Optional. Bio of the user.
     * @var string|null
     */
    public ?string $bio;
    /**
     * Optional. Chat invite link that was used by the user to send the join request
     * @var ChatInviteLink|null
     */
    public ?ChatInviteLink $invite_link;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
            case 'from':
                return new User($data);
            case 'invite_link':
                return new ChatInviteLink($data);
        }

        return parent::bindObjects($key, $data);
    }
}