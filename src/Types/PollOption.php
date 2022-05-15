<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about one answer option in a poll.
 *
 * Class PollOption
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#polloption
 */
class PollOption extends BaseType
{
    /**
     * Option text, 1-100 characters
     * @var string
     */
    public string $text;
    /**
     * Number of users that voted for this option
     * @var string
     */
    public string $voter_count;
}