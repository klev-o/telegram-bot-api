<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents a link to an animated GIF file stored on the Telegram servers. By default, this animated GIF file will be
 * sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with
 * specified content instead of the animation.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedgif
 *
 * Class InlineQueryResultCachedGif
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultCachedGif implements InlineQueryResult
{
    /**
     * Type of the result, must be gif
     * @var string
     */
    public string $type = 'gif';
    /**
     * 	Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid file identifier for the GIF file
     * @var string
     */
    public string $gif_file_id;
    /**
     * Optional. Title for the result
     * @var string|null
     */
    public ?string $title;
    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption;
    /**
     * 	Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the GIF animation
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $gif_file_id)
    {
        $this->id = $id;
        $this->gif_file_id = $gif_file_id;
    }
}