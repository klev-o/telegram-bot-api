<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * This object contains information about an incoming shipping query.
 *
 * @see https://core.telegram.org/bots/api#shippingquery
 *
 * Class ShippingQuery
 * @package Klev\TelegramBotApi\Types\Payments
 */
class ShippingQuery extends BaseType
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var User
     */
    public User $from;
    /**
     * @var string
     */
    public string $invoice_payload;
    /**
     * @var ShippingAddress
     */
    public ShippingAddress $shipping_address;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'from':
                return new User($data);
            case 'shipping_address':
                return new ShippingAddress($data);
        }

        return null;
    }
}