<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultMpeg4Gif implements InlineQueryResult
{
    public string $type = 'mpeg4_gif';
    public string $id;
    public string $mpeg4_url;
    public ?int $mpeg4_width;
    public ?int $mpeg4_height;
    public ?int $mpeg4_duration;
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