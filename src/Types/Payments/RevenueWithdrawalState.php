<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 *
 * RevenueWithdrawalStatePending
 * RevenueWithdrawalStateSucceeded
 * RevenueWithdrawalStateFailed
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstate
 *
 * Class RevenueWithdrawalState
 * @package Klev\TelegramBotApi\Types
 */
abstract class RevenueWithdrawalState extends BaseType
{
    public const TYPE_PENDING = 'pending';
    public const TYPE_SUCCEEDED = 'succeeded';
    public const TYPE_FAILED = 'failed';
    /**
     * Type of the state
     * @var string
     */
    protected string $type;
}