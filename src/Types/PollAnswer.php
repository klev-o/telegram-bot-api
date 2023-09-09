<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * Class PollAnswer
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 */
class PollAnswer extends BaseType
{
    /**
     * Unique poll identifier
     * @var string
     */
    public string $poll_id;
    /**
     * Optional. The chat that changed the answer to the poll, if the voter is anonymous
     * @var Chat|null
     */
    public ?Chat $voter_chat = null;
    /**
     * The user, who changed the answer to the poll
     * @var User|null
     */
    public ?User $user = null;
    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     * @var int[]
     */
    public array $option_ids = [];

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'user':
                return new User($data);
        }

        return null;
    }
}