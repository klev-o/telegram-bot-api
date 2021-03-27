<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultCachedPhoto implements InlineQueryResult
{
    public string $type = 'game';
    public string $id;
    public string $photo_file_id;
    public ?string $title;
    public ?string $description;
    public ?string $caption;
    public ?string $parse_mode;
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
}