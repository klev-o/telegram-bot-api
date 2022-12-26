<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an
 * administrator in the chat for this to work and must have the can_delete_messages administrator rights.
 * Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#deleteforumtopic
 *
 * Class DeleteForumTopic
 * @package Klev\TelegramBotApi\Methods
 */
class DeleteForumTopic extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread of the forum topic
     * @var int
     */
    public int $message_thread_id;

    public function __construct(string $chat_id, int $message_thread_id)
    {
        $this->chat_id = $chat_id;
        $this->message_thread_id = $message_thread_id;
    }
}