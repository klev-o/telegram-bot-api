<?php


namespace Klev\TelegramBotApi\Types\Payments;


use Klev\TelegramBotApi\Types\BaseType;

class ShippingOption extends BaseType
{
    public string $id;
    public string $title;
    /**
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