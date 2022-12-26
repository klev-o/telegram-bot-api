<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a forum topic.
 *
 * Class ForceReply
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#forumtopic
 */
class ForumTopic extends BaseType
{
    /**
     * Unique identifier of the forum topic
     * @var int
     */
    public int $message_thread_id;
    /**
     * Name of the topic
     * @var string
     */
    public string $name;
    /**
     * Color of the topic icon in RGB format
     * @var int
     */
    public int $icon_color;
    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon
     * @var string|null
     */
    public ?string $icon_custom_emoji_id = null;
}