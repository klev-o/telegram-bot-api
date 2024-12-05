<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * Describes a Telegram Star transaction.
 *
 * @link https://core.telegram.org/bots/api#startransaction
 *
 * Class StarTransaction
 * @package Klev\TelegramBotApi\Types\Payments
 */
class StarTransaction extends BaseType
{
    /**
     * Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund
     * transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments
     * from users.
     * @var string
     */
    public string $id;
    /**
     * Integer amount of Telegram Stars transferred by the transaction
     * @var int
     */
    public int $amount;
    /**
     * Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     * @var int|null
     */
    public ?int $nanostar_amount = null;
    /**
     * Date the transaction was created in Unix time
     * @var int
     */
    public int $date;
    /**
     * Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a
     * failed withdrawal). Only for incoming transactions
     * @var TransactionPartner|null
     */
    public ?TransactionPartner $source;
    /**
     * Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal).
     * Only for outgoing transactions
     * @var TransactionPartner|null
     */
    public ?TransactionPartner $receiver;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'source':
            case 'receiver':
                switch ($data['type']) {
                    case TransactionPartner::TYPE_USER:
                        return new TransactionPartnerUser($data);
                    case TransactionPartner::TYPE_AFFILIATE_PROGRAM:
                        return new TransactionPartnerAffiliateProgram($data);
                    case TransactionPartner::TYPE_FRAGMENT:
                        return new TransactionPartnerFragment($data);
                    case TransactionPartner::TYPE_TELEGRAM_ADS:
                        return new TransactionPartnerTelegramAds($data);
                    case TransactionPartner::TYPE_TELEGRAM_API:
                        return new TransactionPartnerTelegramApi($data);
                    case TransactionPartner::TYPE_TELEGRAM_OTHER:
                        return new TransactionPartnerOther($data);
                }
            case 'shipping_address':
                return new ShippingAddress($data);
        }

        return null;
    }
}