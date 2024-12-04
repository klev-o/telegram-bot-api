<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about a poll.
 *
 * Class Poll
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#poll
 */
class Poll extends BaseType
{
    /**
     * Unique poll identifier
     * @var string
     */
    public string $id;
    /**
     * Poll question, 1-255 characters
     * @var string
     */
    public string $question;
    /**
     * Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in
     * poll questions
     * @var MessageEntity[]
     */
    public ?array $question_entities = null;
    /**
     * List of poll options
     * @var PollOption[]
     */
    public array $options;
    /**
     * Total number of users that voted in the poll
     * @var int
     */
    public int $total_voter_count;
    /**
     * True, if the poll is closed
     * @var bool
     */
    public bool $is_closed;
    /**
     * True, if the poll is anonymous
     * @var bool
     */
    public bool $is_anonymous;
    /**
     * Poll type, currently can be “regular” or “quiz”
     * @var string
     */
    public string $type;
    /**
     * True, if the poll allows multiple answers
     * @var bool
     */
    public bool $allows_multiple_answers;
    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode,
     * which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     * @var int|null
     */
    public ?int $correct_option_id;
    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     * poll, 0-200 characters
     * @var string|null
     */
    public ?string $explanation;
    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @var MessageEntity[]|null
     */
    public ?array $explanation_entities;
    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     * @var int|null
     */
    public ?int $open_period;
    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     * @var int|null
     */
    public ?int $close_date;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'options':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PollOption($entity);
                }
                return $result;
            case 'explanation_entities':
            case 'question_entities':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new MessageEntity($entity);
                }
                return $result;
        }

        return null;
    }
}