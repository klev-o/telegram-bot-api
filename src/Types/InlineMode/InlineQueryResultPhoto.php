<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultPhoto implements InlineQueryResult
{
    public string $type = 'photo';
    public string $id;
    public string $photo_url;
    public string $thumb_url;
    public ?int $photo_width;
    public ?int $photo_height;
    public ?string $title;
    public ?string $description;
    public ?string $caption;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;

}