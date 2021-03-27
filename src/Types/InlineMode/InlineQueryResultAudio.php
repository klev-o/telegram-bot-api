<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\MessageEntity;

class InlineQueryResultAudio implements InlineQueryResult
{
    public string $type = 'audio';
    public string $id;
    public string $audio_url;
    public string $title;
    public ?string $caption;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    public ?string $performer;
    public ?int $audio_duration;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
}