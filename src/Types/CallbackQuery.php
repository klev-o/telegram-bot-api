<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that
 * originated the query was attached to a message sent by the bot, the field message will be present. If the button was
 * attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of
 * the fields data or game_short_name will be present.
 *
 * Class CallbackQuery
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#callbackquery
 */
class CallbackQuery extends BaseType
{
    /**
     * Unique identifier for this query
     * @var string
     */
    public string $id;
    /**
     * Sender
     * @var User
     */
    public User $from;
    /**
     * Optional. Message with the callback button that originated the query. Note that message content and message
     * date will not be available if the message is too old
     * @var Message
     */
    public ?Message $message;
    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     * @var string
     */
    public ?string $inline_message_id;
    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     * @var string
     */
    public string $chat_instance;
    /**
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in
     * this field.
     * @var string
     */
    public ?string $data;
    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     * @var string
     */
    public ?string $game_short_name;

    /**
     * @param $key
     * @param $data
     * @return object|null
     */
    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'message':
                return new Message($data);
            case 'from':
                return new User($data);
        }

        return null;
    }
}