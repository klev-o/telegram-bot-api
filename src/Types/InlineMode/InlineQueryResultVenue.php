<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content
 * to send a message with the specified content instead of the venue.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * Class InlineQueryResultVenue
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultVenue implements InlineQueryResult
{
    /**
     * Type of the result, must be venue
     * @var string
     */
    public string $type = 'venue';
    /**
     * Unique identifier for this result, 1-64 Bytes
     * @var string
     */
    public string $id;
    /**
     * Latitude of the venue location in degrees
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of the venue location in degrees
     * @var float
     */
    public float $longitude;
    /**
     * Title of the venue
     * @var string
     */
    public string $title;
    /**
     * Address of the venue
     * @var string
     */
    public string $address;
    /**
     * Optional. Foursquare identifier of the venue if known
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
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the venue
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;
    /**
     * Optional. Url of the thumbnail for the result
     * @var string|null
     */
    public ?string $thumbnail_url;
    /**
     * Optional. Thumbnail width
     * @var int|null
     */
    public ?int $thumbnail_width;
    /**
     * Optional. Thumbnail height
     * @var int|null
     */
    public ?int $thumbnail_height;

    public function __construct(string $id, float $latitude, float $longitude, string $title, string $address)
    {
        $this->id = $id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->title = $title;
        $this->address = $address;
    }
}