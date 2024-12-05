<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * The withdrawal is in progress.
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatepending
 *
 * Class RevenueWithdrawalStatePending
 * @package Klev\TelegramBotApi\Types
 */
final class RevenueWithdrawalStatePending extends RevenueWithdrawalState
{
    /**
     * Type of the transaction partner, always “affiliate_program”
     * @var string
     */
    public string $type = self::TYPE_PENDING;
}