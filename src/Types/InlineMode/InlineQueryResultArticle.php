<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a link to an article or web page.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultarticle
 *
 * Class InlineQueryResultArticle
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultArticle implements InlineQueryResult
{
    /**
     * Type of the result, must be article
     * @var string
     */
    public string $type = 'article';
    /**
     * Unique identifier for this result, 1-64 Bytes
     * @var string
     */
    public string $id;
    /**
     * Title of the result
     * @var string
     */
    public string $title;
    /**
     * Content of the message to be sent
     * @var InputMessageContent
     */
    public InputMessageContent $input_message_content;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. URL of the result
     * @var string|null
     */
    public ?string $url;
    /**
     * Optional. Pass True, if you don't want the URL to be shown in the message
     * @var bool|null
     */
    public ?bool $hide_url;
    /**
     * Optional. Short description of the result
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional. Url of the thumbnail for the result
     * @var string|null
     */
    public ?string $thumb_url;
    /**
     * Optional. Thumbnail width
     * @var int|null
     */
    public ?int $thumb_width;
    /**
     * Optional. Thumbnail height
     * @var int|null
     */
    public ?int $thumb_height;

    public function __construct(string $id, string $title, InputMessageContent $input_message_content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->input_message_content = $input_message_content;
    }
}