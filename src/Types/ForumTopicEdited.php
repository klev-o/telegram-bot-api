<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about an edited forum topic.
 *
 * @link https://core.telegram.org/bots/api#forumtopicedited
 *
 * Class ForumTopicEdited
 * @package Klev\TelegramBotApi\Types
 */
class ForumTopicEdited extends BaseType
{
    /**
     * Optional. New name of the topic, if it was edited
     * @var string|null
     */
    public ?string $name = null;
    /**
     * 	Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the
     * icon was removed
     * @var string|null
     */
    public ?string $icon_custom_emoji_id = null;
}