<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedsticker
 *
 * Class InlineQueryResultCachedSticker
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultCachedSticker implements InlineQueryResult
{
    /**
     * Type of the result, must be sticker
     * @var string
     */
    public string $type = 'sticker';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * A valid file identifier of the sticker
     * @var string
     */
    public string $sticker_file_id;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the sticker
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;

    public function __construct(string $id, string $sticker_file_id)
    {
        $this->id = $id;
        $this->sticker_file_id = $sticker_file_id;
    }
}