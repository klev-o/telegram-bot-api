<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a story.
 *
 * Class Story
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#story
 */
class Story extends BaseType
{
    /**
     * Chat that posted the story
     * @var Chat
     */
    public Chat $chat;
    /**
     * Unique identifier for the story in the chat
     * @var int
     */
    public int $id;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
        }

        return null;
    }
}