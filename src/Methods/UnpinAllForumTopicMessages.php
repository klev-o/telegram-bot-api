<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat
 * for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#deleteforumtopic
 *
 * Class UnpinAllForumTopicMessages
 * @package Klev\TelegramBotApi\Methods
 */
class UnpinAllForumTopicMessages extends BaseMethod
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