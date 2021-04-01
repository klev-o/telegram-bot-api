<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\MessageEntity;

class InputLocationMessageContent implements InputMessageContent
{
    public float $latitude;
    public float $longitude;
    public ?float $horizontal_accuracy;
    public ?int $live_period;
    public ?int $heading;
    public ?int $proximity_alert_radius;
}