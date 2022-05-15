<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * This object contains information about an incoming shipping query.
 *
 * @link https://core.telegram.org/bots/api#shippingquery
 *
 * Class ShippingQuery
 * @package Klev\TelegramBotApi\Types\Payments
 */
class ShippingQuery extends BaseType
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
     * Bot specified invoice payload
     * @var string
     */
    public string $invoice_payload;
    /**
     * User specified shipping address
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