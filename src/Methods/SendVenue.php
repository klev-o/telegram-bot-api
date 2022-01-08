<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * Class SendVenue
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendvenue
 */
class SendVenue extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Latitude of the venue
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of the venue
     * @var float
     */
    public float $longitude;
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
     * Foursquare identifier of the venue
     * @var string|null
     */
    public ?string $foursquare_id = null;
    /**
     * Foursquare type of the venue, if known. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     * @var string|null
     */
    public ?string $foursquare_type = null;
    /**
     * Google Places identifier of the venue
     * @var string|null
     */
    public ?string $google_place_id = null;
    /**
     * Google Places type of the venue. (See supported types.)
     * @var string|null
     */
    public ?string $google_place_type = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * If the message is a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = null;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct($chat_id, $latitude, $longitude, $title, $address)
    {
        $this->chat_id = $chat_id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->title = $title;
        $this->address = $address;
    }
}