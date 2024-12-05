<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * Describes a transaction with an unknown source or recipient.
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerother
 *
 * Class TransactionPartnerOther
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerOther extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “other”
     * @var string
     */
    public string $type = self::TYPE_TELEGRAM_OTHER;
}