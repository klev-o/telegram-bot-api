<?php

namespace Klev\TelegramBotApi\Types\Payments;

/**
 * Describes a withdrawal transaction with Fragment.
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerfragment
 *
 * Class TransactionPartnerFragment
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerFragment extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “fragment”
     * @var string
     */
    public string $type = self::TYPE_FRAGMENT;
    /**
     * Optional. State of the transaction if the transaction is outgoing
     * @var RevenueWithdrawalState|null
     */
    public ?RevenueWithdrawalState $withdrawal_state = null;


    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'withdrawal_state':
                switch ($data['type']) {
                    case RevenueWithdrawalState::TYPE_PENDING:
                        return new RevenueWithdrawalStatePending($data);
                    case RevenueWithdrawalState::TYPE_SUCCEEDED:
                        return new RevenueWithdrawalStateSucceeded($data);
                    case RevenueWithdrawalState::TYPE_FAILED:
                        return new RevenueWithdrawalStateFailed($data);
                }
        }

        return null;
    }
}