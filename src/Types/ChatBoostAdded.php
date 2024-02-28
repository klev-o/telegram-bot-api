<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a user boosting a chat.
 *
 * Class ChatBoostAdded
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#chatboostadded
 */
final class ChatBoostAdded extends BaseType
{
    /**
     * Number of boosts added by the user
     * @var int
     */
    public int $boost_count;
}