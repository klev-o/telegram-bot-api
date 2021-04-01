<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


class InputVenueMessageContent implements InputMessageContent
{
    public float $latitude;
    public float $longitude;
    public string $title;
    public string $address;
    public ?string $foursquare_id;
    public ?string $foursquare_type;
    public ?string $google_place_id;
    public ?string $google_place_type;
}