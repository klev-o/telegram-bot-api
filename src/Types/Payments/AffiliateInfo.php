<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\Chat;
use Klev\TelegramBotApi\Types\User;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 *
 * @link https://core.telegram.org/bots/api#affiliateinfo
 *
 * Class AffiliateInfo
 * @package Klev\TelegramBotApi\Types
 */
final class AffiliateInfo extends BaseType
{
    /**
     * Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     * @var User|null
     */
    public ?User $affiliate_user = null;
    /**
     * Optional. The chat that received an affiliate commission if it was received by a chat
     * @var Chat|null
     */
    public ?Chat $affiliate_chat = null;
    /**
     * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot
     * from referred users
     * @var int
     */
    public int $commission_per_mille;
    /**
     * Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0;
     * can be negative for refunds
     * @var int
     */
    public int $amount;
    /**
     * Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate;
     * from -999999999 to 999999999; can be negative for refunds
     * @var int|null
     */
    public ?int $nanostar_amount = null;
}