<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;


/**
 * This object represent a list of gifts.
 *
 * @link https://core.telegram.org/bots/api#gifts
 *
 * Class Gifts
 * @package Klev\TelegramBotApi\Types\Stickers
 */
class Gifts extends BaseType
{
    /**
     * The list of gifts
     * @var Gift[]
     */
    public array $gifts;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'gifts':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new Gift($entity);
                }
                return $result;
        }

        return null;
    }
}