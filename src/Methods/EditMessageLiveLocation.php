<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is
 * explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message,
 * the edited Message is returned, otherwise True is returned.
 *
 * Class EditMessageLiveLocation
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#editmessagelivelocation
 */
class EditMessageLiveLocation extends BaseMethod
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     * @var string|null
     */
    public ?string $chat_id = null;
    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit
     * @var int|null
     */
    public ?int $message_id = null;
    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message
     * @var string|null
     */
    public ?string $inline_message_id = null;
    /**
     * Latitude of new location
     * @var float
     */
    public float $latitude;
    /**
     * Longitude of new location
     * @var float
     */
    public float $longitude;
    /**
     * The radius of uncertainty for the location, measured in meters; 0-1500
     * @var float|null
     */
    public ?float $horizontal_accuracy = null;
    /**
     * Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var int|null
     */
    public ?int $heading = null;
    /**
     * Maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and
     * 100000 if specified.
     * @var int|null
     */
    public ?int $proximity_alert_radius = null;
    /**
     * A JSON-serialized object for a new inline keyboard.
     * @var InlineKeyboardMarkup
     */
    public $reply_markup = '';

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}