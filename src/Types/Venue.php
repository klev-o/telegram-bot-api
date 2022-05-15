<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a venue.
 *
 * Class Venue
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#venue
 */
class Venue extends BaseType
{
    /**
     * Venue location
     * @var Location
     */
    public Location $location;
    /**
     * Name of the venue
     * @var string
     */
    public string $title;
    /**
     * Address of the venue
     * @var string
     */
    public string $address;
    /**
     * Optional. Foursquare identifier of the venue
     * @var string|null
     */
    public ?string $foursquare_id;
    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     * @var string|null
     */
    public ?string $foursquare_type;
    /**
     * Optional. Google Places identifier of the venue
     * @var string|null
     */
    public ?string $google_place_id;
    /**
     * Optional. Google Places type of the venue. (See supported types.)
     * @var string|null
     */
    public ?string $google_place_type;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'location':
                return new Location($data);
        }

        return null;
    }
}