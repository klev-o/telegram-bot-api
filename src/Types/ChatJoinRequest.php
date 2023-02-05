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
     * 	Identifier of a private chat with the user who sent the join request. This number may have more than 32
     * significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it
     * has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this
     * identifier. The bot can use this identifier for 24 hours to send messages until the join request is processed,
     * assuming no other administrator contacted the user.
     * @var int
     */
    public int $user_chat_id;
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