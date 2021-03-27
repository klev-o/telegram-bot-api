<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultGif implements InlineQueryResult
{
    public string $type = 'gif';
    public string $id;
    public string $gif_url;
    public ?int $gif_width;
    public ?int $gif_height;
    public ?int $gif_duration;
    public ?string $thumb_url;
    public ?string $thumb_mime_type;
    public ?string $title;
    public ?string $caption;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
}