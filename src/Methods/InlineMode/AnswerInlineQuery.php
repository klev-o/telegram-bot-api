<?php


namespace Klev\TelegramBotApi\Methods\InlineMode;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineMode\InlineQueryResult;
use Klev\TelegramBotApi\Types\InlineMode\InlineQueryResultsButton;

/**
 * Use this method to send answers to an inline query. On success, True is returned. No more than 50 results
 * per query are allowed.
 *
 * @link https://core.telegram.org/bots/api#answerinlinequery
 *
 * Class AnswerInlineQuery
 * @package Klev\TelegramBotApi\Methods\InlineMode
 */
class AnswerInlineQuery extends BaseMethod
{
    /**
     * Unique identifier for the answered query
     * @var string
     */
    public string $inline_query_id;
    /**
     * A JSON-serialized array of results for the inline query
     * @var InlineQueryResult[]
     */
    public $results = '';
    /**
     * The maximum amount of time in seconds that the result of the inline query may be cached on the server.
     * Defaults to 300.
     * @var int|null
     */
    public ?int $cache_time = null;
    /**
     * 	Pass True, if results may be cached on the server side only for the user that sent the query. By default,
     * results may be returned to any user who sends the same query
     * @var bool|null
     */
    public ?bool $is_personal = null;
    /**
     * Pass the offset that a client should send in the next query with the same text to receive more results. Pass an
     * empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     * @var string|null
     */
    public ?string $next_offset = '';
    /**
     * A JSON-serialized object describing a button to be shown above inline query results
     * @var InlineQueryResultsButton
     */
    public $button = '';

    public function __construct($inline_query_id, $results)
    {
        $this->inline_query_id = $inline_query_id;
        $this->results = $results;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->results)) {
            $this->results = json_encode($this->results);
        }
        if (!empty($this->button)) {
            $this->button = json_encode($this->button);
        }

        $this->setIsPrepared(true);
    }
}