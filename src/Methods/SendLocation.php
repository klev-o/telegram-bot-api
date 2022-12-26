<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send point on the map. On success, the sent Message is returned.
 *
 * Class SendLocation
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#sendlocation
 */
class SendLocation extends BaseMethod
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
     * Latitude of the location
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of the location
     * @var float
     */
    public float $longitude;
    /**
     * @var float|null
     */
    public ?float $horizontal_accuracy = null;
    /**
     * Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400.
     * @var int
     */
    public ?int $live_period = null;
    /**
     * For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var int|null
     */
    public ?int $heading = null;
    /**
     * For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters.
     * Must be between 1 and 100000 if specified.
     * @var int|null
     */
    public ?int $proximity_alert_radius = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool
     */
    public ?bool $disable_notification = false;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * If the message is a reply, ID of the original message
     * @var int
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
     * @var KeyboardInterface
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, float $latitude, float $longitude)
    {
        $this->chat_id = $chat_id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}