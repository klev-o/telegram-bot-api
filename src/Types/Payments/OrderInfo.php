<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object represents information about an order.
 *
 * @see https://core.telegram.org/bots/api#orderinfo
 *
 * Class OrderInfo
 * @package Klev\TelegramBotApi\Types\Payments
 */
class OrderInfo extends BaseType
{
    /**
     * Optional. User name
     * @var string|null
     */
    public ?string $name;
    /**
     * Optional. User's phone number
     * @var string|null
     */
    public ?string $phone_number;
    /**
     * Optional. User email
     * @var string|null
     */
    public ?string $email;
    /**
     * Optional. User shipping address
     * @var ShippingAddress|null
     */
    public ?ShippingAddress $shipping_address;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'shipping_address':
                return new ShippingAddress($data);
        }

        return null;
    }
}