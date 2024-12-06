<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to edit a subscription invite link created by the bot. The bot must have the can_invite_users
 * administrator rights. Returns the edited invite link as a ChatInviteLink object.
 *
 * @link https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
 *
 * Class EditChatSubscriptionInviteLink
 * @package Klev\TelegramBotApi\Methods
 */
final class EditChatSubscriptionInviteLink extends BaseMethod
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
     * The invite link to edit
     * @var string
     */
    public string $invite_link;

    public function __construct($chat_id, string $invite_link)
    {
        $this->chat_id = $chat_id;
        $this->invite_link = $invite_link;
    }
}