<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendpoll
 *
 * Class SendPoll
 * @package Klev\TelegramBotApi\Methods
 */
class SendPoll extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Poll question, 1-300 characters
     * @var string
     */
    public string $question;
    /**
     * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     * @var string[]|string
     */
    public $options;
    /**
     * True, if the poll needs to be anonymous, defaults to True
     * @var bool|null
     */
    public ?bool $is_anonymous;
    /**
     * Poll type, “quiz” or “regular”, defaults to “regular”
     * @var string|null
     */
    public ?string $type;
    /**
     * True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
     * @var bool|null
     */
    public ?bool $allows_multiple_answers;
    /**
     * 0-based identifier of the correct answer option, required for polls in quiz mode
     * @var int|null
     */
    public ?int $correct_option_id;
    /**
     * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll,
     * 0-200 characters with at most 2 line feeds after entities parsing
     * @var string|null
     */
    public ?string $explanation;
    /**
     * Mode for parsing entities in the explanation. See formatting options for more details.
     * @var string|null
     */
    public ?string $explanation_parse_mode;
    /**
     * List of special entities that appear in the poll explanation, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $explanation_entities;
    /**
     * Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
     * @var int|null
     */
    public ?int $open_period;
    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than
     * 600 seconds in the future. Can't be used together with open_period.
     * @var int|null
     */
    public ?int $close_date;
    /**
     * Pass True, if the poll needs to be immediately closed. This can be useful for poll preview.
     * @var bool|null
     */
    public ?bool $is_closed;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct($chat_id, $question, $options)
    {
        $this->chat_id = $chat_id;
        $this->question = $question;
        $this->options = $options;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (is_array($this->options)) {
            $this->options = json_encode($this->options);
        }

        parent::preparation();
    }
}