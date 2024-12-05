<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object describes the source of a transaction, or its recipient for outgoing transactions.
 * Currently, it can be one of
 *
 * TransactionPartnerUser
 * TransactionPartnerAffiliateProgram
 * TransactionPartnerFragment
 * TransactionPartnerTelegramAds
 * TransactionPartnerTelegramApi
 * TransactionPartnerOther
 *
 * @link https://core.telegram.org/bots/api#transactionpartner
 *
 * Class TransactionPartner
 * @package Klev\TelegramBotApi\Types
 */
abstract class TransactionPartner extends BaseType
{
    public const TYPE_USER = 'user';
    public const TYPE_AFFILIATE_PROGRAM = 'affiliate_program';
    public const TYPE_FRAGMENT = 'fragment';
    public const TYPE_TELEGRAM_ADS = 'telegram_ads';
    public const TYPE_TELEGRAM_API = 'telegram_api';
    public const TYPE_TELEGRAM_OTHER= 'other';
    /**
     * Type of the transaction partner
     * @var string
     */
    protected string $type;
}