<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a voice chat scheduled in the chat.
 *
 * @link https://core.telegram.org/bots/api#voicechatscheduled
 *
 * Class VideoChatScheduled
 * @package Klev\TelegramBotApi\Types
 */
class VideoChatScheduled extends BaseType
{
    /**
     * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
     * @var int
     */
    public int $start_date;
}