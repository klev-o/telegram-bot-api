<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a voice chat ended in the chat.
 *
 * @link https://core.telegram.org/bots/api#voicechatended
 *
 * Class VideoChatEnded
 * @package Klev\TelegramBotApi\Types
 */
class VideoChatEnded extends BaseType
{
    /**
     * Voice chat duration; in seconds
     * @var int
     */
    public int $duration;
}