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
     * Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed
     * in poll option texts
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;
    /**
     * Number of users that voted for this option
     * @var string
     */
    public string $voter_count;
}