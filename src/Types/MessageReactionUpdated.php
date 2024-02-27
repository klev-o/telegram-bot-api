<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a change of a reaction on a message performed by a user.
 *
 * Class MessageReactionUpdated
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messagereactionupdated
 */
final class MessageReactionUpdated extends BaseType
{
    /**
     * The chat containing the message the user reacted to
     * @var Chat
     */
    public Chat $chat;
    /**
     * The Unique identifier of the message inside the chat
     * @var int
     */
    public int $message_id;
    /**
     * Optional. The user that changed the reaction, if the user isn't anonymous
     * @var User|null
     */
    public ?User $user;
    /**
     * Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     * @var Chat|null
     */
    public ?Chat $actor_chat;
    /**
     * Date of the change in Unix time
     * @var int
     */
    public int $date;
    /**
     * Previous list of reaction types that were set by the user
     * @var ReactionType[]
     */
    public array $old_reaction;
    /**
     * New list of reaction types that have been set by the user
     * @var ReactionType[]
     */
    public array $new_reaction;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
            case 'user':
                return new User($data);
            case 'old_reaction':
            case 'new_reaction':
                $result = [];
                foreach ($data as $reaction) {
                    if(isset($reaction['custom_emoji_id'])){
                        $result[] =  new ReactionTypeCustomEmoji($data);
                    } else {
                        $result[] =  new ReactionTypeEmoji($data);
                    }
                }
                return $result;
        }
        return null;
    }
}