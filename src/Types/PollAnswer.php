<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * Class PollAnswer
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#pollanswer
 */
class PollAnswer extends BaseType
{
    /**
     * Unique poll identifier
     * @var string
     */
    public string $poll_id;
    /**
     * The user, who changed the answer to the poll
     * @var User
     */
    public User $user;
    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     * @var int[]
     */
    public array $option_ids;
}