<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the file. Currently, only
 * .PDF and .ZIP files can be sent using this method.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * Class InlineQueryResultDocument
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultDocument implements InlineQueryResult
{
    /**
     * Type of the result, must be document
     * @var string
     */
    public string $type = 'document';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * Title for the result
     * @var string
     */
    public string $title;
    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * A valid URL for the file
     * @var string|null
     */
    public ?string $document_url;
    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     * @var string|null
     */
    public ?string $mime_type;
    /**
     * Optional. Short description of the result
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the file
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;
    /**
     * Optional. URL of the thumbnail (jpeg only) for the file
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

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }
}