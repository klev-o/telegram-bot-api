<?php


namespace Klev\TelegramBotApi\Methods\Payments;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Payments\ShippingOption;

/**
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will
 * send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success,
 * True is returned.
 *
 * @see https://core.telegram.org/bots/api#answershippingquery
 *
 * Class AnswerShippingQuery
 * @package Klev\TelegramBotApi\Methods\Payments
 */
class AnswerShippingQuery extends BaseMethod
{
    /**
     * Unique identifier for the query to be answered
     * @var string
     */
    public string $shipping_query_id;
    /**
     * 	Specify True if delivery to the specified address is possible and False if there are any problems (for example,
     * if delivery to the specified address is not possible)
     * @var bool
     */
    public bool $ok;
    /**
     * Required if ok is True. A JSON-serialized array of available shipping options.
     * @var ShippingOption[]|string
     */
    public $shipping_options = '';
    /**
     * Required if ok is False. Error message in human readable form that explains why it is impossible to complete the
     * order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message
     * to the user.
     * @var string|null
     */
    public ?string $error_message = null;

    public function __construct(string $shipping_query_id, bool $ok)
    {
        $this->shipping_query_id = $shipping_query_id;
        $this->ok = $ok;
    }
}