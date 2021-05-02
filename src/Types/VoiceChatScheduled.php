<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a voice chat scheduled in the chat.
 *
 * @see https://core.telegram.org/bots/api#voicechatscheduled
 *
 * Class VoiceChatScheduled
 * @package Klev\TelegramBotApi\Types
 */
class VoiceChatScheduled extends BaseType
{
    /**
     * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
     * @var int
     */
    public int $start_date;
}