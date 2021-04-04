<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is
 * automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate
 * admin rights. Returns the revoked invite link as ChatInviteLink object.
 *
 * @see https://core.telegram.org/bots/api#revokechatinvitelink
 *
 * Class RevokeChatInviteLink
 * @package Klev\TelegramBotApi\Methods
 */
class RevokeChatInviteLink extends BaseMethod
{
    /**
     * Unique identifier of the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * The invite link to revoke
     * @var string
     */
    public string $invite_link;

    public function __construct(string $chat_id, string $invite_link)
    {
        $this->chat_id = $chat_id;
        $this->invite_link = $invite_link;
    }
}