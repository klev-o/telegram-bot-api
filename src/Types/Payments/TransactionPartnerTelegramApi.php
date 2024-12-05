<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * Describes a transaction with payment for paid broadcasting.
 *
 * @link https://core.telegram.org/bots/api#transactionpartnertelegramapi
 *
 * Class TransactionPartnerTelegramApi
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerTelegramApi extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “telegram_api”
     * @var string
     */
    public string $type = self::TYPE_TELEGRAM_API;
    /**
     * The number of successful requests that exceeded regular limits and were therefore billed
     * @var int
     */
    public int $request_count;
}