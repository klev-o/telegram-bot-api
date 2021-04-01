<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultDocument implements InlineQueryResult
{
    public string $type = 'document';
    public string $id;
    public string $title;
    public ?string $caption;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?string $document_url;
    public ?string $mime_type;
    public ?string $description;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
    public ?string $thumb_url;
    public ?int $thumb_width;
    public ?int $thumb_height;
}