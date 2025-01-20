<?php


namespace Klev\TelegramBotApi\Methods\Payments;


use Klev\TelegramBotApi\Methods\BaseMethod;

/**
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#edituserstarsubscription
 *
 * Class EditUserStarSubscription
 * @package Klev\TelegramBotApi\Methods\Payments
 */
class EditUserStarSubscription extends BaseMethod
{
    /**
     * Identifier of the user whose subscription will be edited
     * @var string
     */
    public string $user_id;
    /**
     * Telegram payment identifier for the subscription
     * @var string
     */
    public string $telegram_payment_charge_id;
    /**
     * Pass True to cancel extension of the user subscription; the subscription must be active up to the end of the
     * current subscription period. Pass False to allow the user to re-enable a subscription that was previously
     * canceled by the bot.
     * @var bool
     */
    public bool $is_canceled;
}