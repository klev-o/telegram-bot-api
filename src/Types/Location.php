<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a point on the map.
 *
 * Class Location
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#location
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
}