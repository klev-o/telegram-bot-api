<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to create a subscription invite link for a channel chat. The bot must have the can_invite_users
 * administrator rights. The link can be edited using the method editChatSubscriptionInviteLink or revoked using the
 * method revokeChatInviteLink. Returns the new invite link as a ChatInviteLink object.
 *
 * @link https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
 *
 * Class CreateChatSubscriptionInviteLink
 * @package Klev\TelegramBotApi\Methods
 */
final class CreateChatSubscriptionInviteLink extends BaseMethod
{
    /**
     * Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Invite link name; 0-32 characters
     * @var string|null
     */
    public ?string $name;
    /**
     * The number of seconds the subscription will be active for before the next payment. Currently, it must always be
     * 2592000 (30 days).
     * @var int
     */
    public int $subscription_period;
    /**
     * The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a
     * member of the chat; 1-2500
     * @var int|
     */
    public int $subscription_price;

    public function __construct($chat_id, int $subscription_period, int $subscription_price)
    {
        $this->chat_id = $chat_id;
        $this->subscription_period = $subscription_period;
        $this->subscription_price = $subscription_price;
    }
}