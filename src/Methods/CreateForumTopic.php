<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this
 * to work and must have the can_manage_topics administrator rights. Returns information about the created topic
 * as a ForumTopic object.
 *
 * @link https://core.telegram.org/bots/api#createforumtopic
 *
 * Class CreateForumTopic
 * @package Klev\TelegramBotApi\Methods
 */
class CreateForumTopic extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Topic name, 1-128 characters
     * @var string
     */
    public string $name;
    /**
     * Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E),
     * 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @var int|null
     */
    public ?int $icon_color = null;
    /**
     * Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed
     * custom emoji identifiers.
     * @var string|null
     */
    public ?string $icon_custom_emoji_id = null;

    public function __construct(string $chat_id, string $name)
    {
        $this->chat_id = $chat_id;
        $this->name = $name;
    }
}