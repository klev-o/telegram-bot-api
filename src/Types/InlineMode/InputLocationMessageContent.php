<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 *
 * @see https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * Class InputLocationMessageContent
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InputLocationMessageContent implements InputMessageContent
{
    /**
     * Latitude of the location in degrees
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of the location in degrees
     * @var float
     */
    public float $longitude;
    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @var float|null
     */
    public ?float $horizontal_accuracy;
    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     * @var int|null
     */
    public ?int $live_period;
    /**
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between
     * 1 and 360 if specified.
     * @var int|null
     */
    public ?int $heading;
    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member,
     * in meters. Must be between 1 and 100000 if specified.
     * @var int|null
     */
    public ?int $proximity_alert_radius;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}