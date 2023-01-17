<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the
 * chat for this to work and must have can_manage_topics administrator rights, unless it is the creator of the topic.
 * Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#editforumtopic
 *
 * Class EditForumTopic
 * @package Klev\TelegramBotApi\Methods
 */
class EditForumTopic extends BaseMethod
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
    /**
     * Topic name, 1-128 characters
     * @var string|null
     */
    public ?string $name = null;
    /**
     * New unique identifier of the custom emoji shown as the topic icon.
     * Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * @var string|null
     */
    public ?string $icon_custom_emoji_id = null;

    public function __construct(string $chat_id, int $message_thread_id)
    {
        $this->chat_id = $chat_id;
        $this->message_thread_id = $message_thread_id;
    }
}