<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * Class SendVenue
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendvenue
 */
class SendVenue extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
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
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
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