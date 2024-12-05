<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 *
 * @link https://core.telegram.org/bots/api#transactionpartnertelegramads
 *
 * Class TransactionPartnerTelegramAds
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerTelegramAds extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “telegram_ads”
     * @var string
     */
    public string $type = self::TYPE_TELEGRAM_ADS;
}