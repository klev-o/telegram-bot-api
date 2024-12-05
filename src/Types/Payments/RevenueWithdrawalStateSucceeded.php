<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * The withdrawal succeeded.
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatesucceeded
 *
 * Class RevenueWithdrawalStateSucceeded
 * @package Klev\TelegramBotApi\Types
 */
final class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    /**
     * Type of the transaction partner, always “succeeded”
     * @var string
     */
    public string $type = self::TYPE_SUCCEEDED;
    /**
     * Date the withdrawal was completed in Unix time
     * @var int
     */
    public int $date;
    /**
     * An HTTPS URL that can be used to see transaction details
     * @var string
     */
    public string $url;
}