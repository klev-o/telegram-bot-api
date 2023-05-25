<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the photo.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultphoto
 *
 * Class InlineQueryResultPhoto
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultPhoto implements InlineQueryResult
{
    /**
     * Type of the result, must be photo
     * @var string
     */
    public string $type = 'photo';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
     * @var string
     */
    public string $photo_url;
    /**
     * URL of the thumbnail for the photo
     * @var string
     */
    public string $thumbnail_url;
    /**
     * Optional. Width of the photo
     * @var int|null
     */
    public ?int $photo_width;
    /**
     * 	Optional. Height of the photo
     * @var int|null
     */
    public ?int $photo_height;
    /**
     * Optional. Title for the result
     * @var string|null
     */
    public ?string $title;
    /**
     * Optional. Short description of the result
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the photo
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $photo_url, string $thumbnail_url)
    {
        $this->id = $id;
        $this->photo_url = $photo_url;
        $this->thumbnail_url = $thumbnail_url;
    }
}