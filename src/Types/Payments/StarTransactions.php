<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains a list of Telegram Star transactions.
 *
 * @link https://core.telegram.org/bots/api#startransactions
 *
 * Class StarTransactions
 * @package Klev\TelegramBotApi\Types\Payments
 */
class StarTransactions extends BaseType
{
    /**
     * The list of transactions
     * @var StarTransaction[]
     */
    public array $transactions;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'transactions':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new StarTransaction($entity);

                }
                return $result;
        }

        return null;
    }
}