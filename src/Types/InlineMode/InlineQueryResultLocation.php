<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultLocation implements InlineQueryResult
{
    public string $type = 'location';
    public string $id;
    public float $latitude;
    public float $longitude;
    public string $title;
    public ?float $horizontal_accuracy;
    public ?int $live_period;
    public ?int $heading;
    public ?int $proximity_alert_radius;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
    public ?string $thumb_url;
    public ?int $thumb_width;
    public ?int $thumb_height;
}