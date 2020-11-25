<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * Class SendPoll
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendpoll
 */
class SendPoll extends BaseMethod
{
    public string $chat_id;
    public string $question;
    /**
     * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     * @var string
     */
    public string $options;
    public ?bool $is_anonymous;
    public ?string $type;
    public ?bool $allows_multiple_answers;
    public ?int $correct_option_id;
    public ?string $explanation;
    public ?string $explanation_parse_mode;
    public ?array $explanation_entities;
    public ?int $open_period;
    public ?int $close_date;
    public ?bool $is_closed;
    public ?bool $disable_notification;
    public ?int $reply_to_message_id;
    public ?bool $allow_sending_without_reply;
    public $reply_markup = '';

    public function __construct($chat_id, $question, $options)
    {
        $this->chat_id = $chat_id;
        $this->question = $question;
        $this->options = $options;
    }
}