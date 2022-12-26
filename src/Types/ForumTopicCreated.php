<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a new forum topic created in the chat.
 *
 * @link https://core.telegram.org/bots/api#forumtopiccreated
 *
 * Class ForumTopicCreated
 * @package Klev\TelegramBotApi\Types
 */
class ForumTopicCreated extends BaseType
{
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