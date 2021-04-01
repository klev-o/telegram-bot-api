<?php


namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object contains basic information about a successful payment.
 *
 * @see https://core.telegram.org/bots/api#successfulpayment
 *
 * Class SuccessfulPayment
 * @package Klev\TelegramBotApi\Types\Payments
 */
class SuccessfulPayment extends BaseType
{
    /**
     * Three-letter ISO 4217 currency code
     * @var string
     */
    public string $currency;
    /**
     * 	Total price in the smallest units of the currency (integer, not float/double). For example, for a price of
     * US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
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
    /**
     * Telegram payment identifier
     * @var string
     */
    public string $telegram_payment_charge_id;
    /**
     * Provider payment identifier
     * @var string
     */
    public string $provider_payment_charge_id;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'order_info':
                return new OrderInfo($data);
        }

        return null;
    }
}