<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultVideo implements InlineQueryResult
{
    public string $type = 'video';
    public string $id;
    public string $video_url;
    public string $mime_type;
    public string $thumb_url;
    public string $title;
    public ?string $caption;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?int $video_width;
    public ?int $video_height;
    public ?string $video_duration;
    public ?string $description;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
}