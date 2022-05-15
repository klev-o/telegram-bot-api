<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a point on the map.
 *
 * Class Location
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#location
 */
class Location extends BaseType
{
    /**
     * Longitude as defined by sender
     * @var float
     */
    public float $longitude;
    /**
     * Latitude as defined by sender
     * @var float
     */
    public float $latitude;
    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @var float|null
     */
    public ?float $horizontal_accuracy;
    /**
     * Optional. Time relative to the message sending date, during which the location can be updated, in seconds.
     * For active live locations only.
     * @var int|null
     */
    public ?int $live_period;
    /**
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @var int|null
     */
    public ?int $heading;
    /**
     * Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live
     * locations only.
     * @var int|null
     */
    public ?int $proximity_alert_radius;
}