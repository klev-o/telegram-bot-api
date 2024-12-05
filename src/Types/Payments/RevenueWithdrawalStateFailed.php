<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * The withdrawal failed and the transaction was refunded.
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatefailed
 *
 * Class RevenueWithdrawalStateFailed
 * @package Klev\TelegramBotApi\Types
 */
final class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    /**
     * Type of the transaction partner, always “failed”
     * @var string
     */
    public string $type = self::TYPE_FAILED;
}