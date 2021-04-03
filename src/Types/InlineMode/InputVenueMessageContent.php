<?php


namespace Klev\TelegramBotApi\Types\InlineMode;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 *
 * @see https://core.telegram.org/bots/api#inputvenuemessagecontent
 *
 * Class InputVenueMessageContent
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InputVenueMessageContent implements InputMessageContent
{
    /**
     * Latitude of the venue in degrees
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of the venue in degrees
     * @var float
     */
    public float $longitude;
    /**
     * 	Name of the venue
     * @var string
     */
    public string $title;
    /**
     * Address of the venue
     * @var string
     */
    public string $address;
    /**
     * Optional. Foursquare identifier of the venue, if known
     * @var string|null
     */
    public ?string $foursquare_id;
    /**
     * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”,
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

    public function __construct(float $latitude, float $longitude, string $title, string $address)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->title = $title;
        $this->address = $address;
    }
}