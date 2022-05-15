<?php

namespace Klev\TelegramBotApi\Methods\InlineMode;

use Klev\TelegramBotApi\Types\InlineMode\InlineQueryResult;

/**
 * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the
 * user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
 *
 * @link https://core.telegram.org/bots/api#answerwebappquery
 *
 * Class AnswerWebAppQuery
 * @package Klev\TelegramBotApi\Methods\InlineMode
 */
class AnswerWebAppQuery
{
    /**
     * Unique identifier for the query to be answered
     * @var string
     */
    public string $web_app_query_id;
    /**
     * A JSON-serialized array of results for the inline query
     * @var InlineQueryResult[]|string
     */
    public $results = '';
}