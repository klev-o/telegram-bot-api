<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * Class MessageReactionCountUpdated
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messagereactioncountupdated
 */
final class MessageReactionCountUpdated extends BaseType
{
    /**
     * The chat containing the message
     * @var Chat
     */
    public Chat $chat;
    /**
     * Unique message identifier inside the chat
     * @var int
     */
    public int $message_id;
    /**
     * Date of the change in Unix time
     * @var int
     */
    public int $date;
    /**
     * List of reactions that are present on the message
     * @var ReactionType[]
     */
    public array $reactions;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'reactions':
                $result = [];
                foreach ($data as $reaction) {
                    if(isset($reaction['custom_emoji_id'])){
                        $result[] = new ReactionTypeCustomEmoji($data);
                    } else {
                        $result[] = new ReactionTypeEmoji($data);
                    }
                }
                return $result;
        }
        return null;
    }
}