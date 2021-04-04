<?php


namespace Klev\TelegramBotApi\Types\Payments;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object represents one shipping option.
 *
 * @see https://core.telegram.org/bots/api#shippingoption
 *
 * Class ShippingOption
 * @package Klev\TelegramBotApi\Types\Payments
 */
class ShippingOption extends BaseType
{
    /**
     * Shipping option identifier
     * @var string
     */
    public string $id;
    /**
     * Option title
     * @var string
     */
    public string $title;
    /**
     * List of price portions
     * @var LabeledPrice[]
     */
    public array $prices;

    protected function bindObjects($key, $data): ?array
    {
        switch ($key) {
            case 'prices':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new LabeledPrice($entity);
                }
                return $result;
        }

        return null;
    }
}