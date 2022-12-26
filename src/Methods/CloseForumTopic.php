<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for
 * this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic.
 * Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#closeforumtopic
 *
 * Class CloseForumTopic
 * @package Klev\TelegramBotApi\Methods
 */
class CloseForumTopic extends BaseMethod
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