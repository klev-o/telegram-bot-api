<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * This object contains information about an incoming pre-checkout query.
 *
 * @link https://core.telegram.org/bots/api#precheckoutquery
 *
 * Class PreCheckoutQuery
 * @package Klev\TelegramBotApi\Types\Payments
 */
class PreCheckoutQuery extends BaseType
{
    /**
     * Unique query identifier
     * @var string
     */
    public string $id;
    /**
     * User who sent the query
     * @var User
     */
    public User $from;
    /**
     * Three-letter ISO 4217 currency code
     * @var string
     */
    public string $currency;
    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     * @var int
     */
    public int $total_amount;
    /**
     * Bot specified invoice payload
     * @var string
     */
    public string $invoice_payload;
    /**
     * Optional. Identifier of the shipping option chosen by the user
     * @var string|null
     */
    public ?string $shipping_option_id;
    /**
     * Optional. Order info provided by the user
     * @var OrderInfo|null
     */
    public ?OrderInfo $order_info;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'from':
                return new User($data);
            case '$order_info':
                return new OrderInfo($data);
        }

        return null;
    }
}