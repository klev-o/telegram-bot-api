<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use
 * input_message_content to send a message with the specified content instead of the location.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultlocation
 *
 * Class InlineQueryResultLocation
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultLocation implements InlineQueryResult
{
    /**
     * Type of the result, must be location
     * @var string
     */
    public string $type = 'location';
    /**
     * Unique identifier for this result, 1-64 Bytes
     * @var string
     */
    public string $id;
    /**
     * Location latitude in degrees
     * @var float
     */
    public float $latitude;
    /**
     * Location longitude in degrees
     * @var float
     */
    public float $longitude;
    /**
     * 	Location title
     * @var string
     */
    public string $title;
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
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var int|null
     */
    public ?int $heading;
    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in
     * meters. Must be between 1 and 100000 if specified.
     * @var int|null
     */
    public ?int $proximity_alert_radius;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * Optional. Content of the message to be sent instead of the location
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;
    /**
     * Optional. Url of the thumbnail for the result
     * @var string|null
     */
    public ?string $thumb_url;
    /**
     * Optional. Thumbnail width
     * @var int|null
     */
    public ?int $thumb_width;
    /**
     * Optional. Thumbnail height
     * @var int|null
     */
    public ?int $thumb_height;

    public function __construct(string $id, float $latitude, float $longitude, string $title)
    {
        $this->id = $id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->title = $title;
    }
}