<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultVenue implements InlineQueryResult
{
    public string $type = 'venue';
    public string $id;
    public float $latitude;
    public float $longitude;
    public string $title;
    public string $address;
    public ?string $foursquare_id;
    public ?string $foursquare_type;
    public ?string $google_place_id;
    public ?string $google_place_type;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
    public ?string $thumb_url;
    public ?int $thumb_width;
    public ?int $thumb_height;
}