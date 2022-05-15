<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @link https://core.telegram.org/bots/api#messageautodeletetimerchanged
 *
 * Class MessageAutoDeleteTimerChanged
 * @package Klev\TelegramBotApi\Types
 */
class MessageAutoDeleteTimerChanged extends BaseType
{
    /**
     * New auto-delete time for messages in the chat
     * @var int
     */
    public int $message_auto_delete_time;
}