<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\User;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 *
 * @link https://core.telegram.org/bots/api#transactionpartneraffiliateprogram
 *
 * Class TransactionPartnerAffiliateProgram
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerAffiliateProgram extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “affiliate_program”
     * @var string
     */
    public string $type = self::TYPE_AFFILIATE_PROGRAM;
    /**
     * Optional. Information about the bot that sponsored the affiliate program
     * @var User|null
     */
    public ?User $sponsor_user = null;
    /**
     * The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program
     * sponsor from referred users
     * @var int
     */
    public int $commission_per_mille;


    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'sponsor_user':
                return new User($data);
        }

        return null;
    }
}