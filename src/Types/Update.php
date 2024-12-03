<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\InlineMode\ChosenInlineResult;
use Klev\TelegramBotApi\Types\InlineMode\InlineQuery;
use Klev\TelegramBotApi\Types\Payments\PreCheckoutQuery;
use Klev\TelegramBotApi\Types\Payments\ShippingQuery;

/**
 * Class Update
 *
 * @link https://core.telegram.org/bots/api#update
 */
class Update extends BaseType
{
    /**
     * The update's unique identifier. Update identifiers start from a certain positive number and increase
     * sequentially. This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated
     * updates or to restore the correct update sequence, should they get out of order. If there are no new updates for
     * at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @var integer
     */
    public int $update_id;
    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc
     * @var Message|null
     */
    public ?Message $message = null;
    /**
     * Optional. New version of a message that is known to the bot and was edited
     * @var Message|null
     */
    public ?Message $edited_message = null;
    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     * @var Message|null
     */
    public ?Message $channel_post = null;
    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     * @var Message|null
     */
    public ?Message $edited_channel_post = null;
    /**
     * Optional. The bot was connected to or disconnected from a business account, or a user edited an existing
     * connection with the bot
     * @var BusinessConnection|null
     */
    public ?BusinessConnection $business_connection = null;
    /**
     * Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must
     * explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't
     * received for reactions set by bots.
     * @var MessageReactionUpdated|null
     */
    public ?MessageReactionUpdated $message_reaction = null;
    /**
     * Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the
     * chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these
     * updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @var MessageReactionCountUpdated|null
     */
    public ?MessageReactionCountUpdated $message_reaction_count = null;
    /**
     * Optional. New incoming inline query
     * @var InlineQuery|null
     */
    public ?InlineQuery $inline_query = null;
    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @var ChosenInlineResult|null
     */
    public ?ChosenInlineResult $chosen_inline_result = null;
    /**
     * Optional. New incoming callback query
     * @var CallbackQuery|null
     */
    public ?CallbackQuery $callback_query = null;
    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     * @var ShippingQuery|null
     */
    public ?ShippingQuery $shipping_query = null;
    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     * @var PreCheckoutQuery|null
     */
    public ?PreCheckoutQuery $pre_checkout_query = null;
    /**
     * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     * @var Poll|null
     */
    public ?Poll $poll = null;
    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were
     * sent by the bot itself.
     * @var PollAnswer|null
     */
    public ?PollAnswer $poll_answer = null;
    /**
     * Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only
     * when the bot is blocked or unblocked by the user.
     * @var ChatMemberUpdated|null
     */
    public ?ChatMemberUpdated $my_chat_member = null;
    /**
     * Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must
     * explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
     * @var ChatMemberUpdated|null
     */
    public ?ChatMemberUpdated $chat_member = null;
    /**
     * Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right
     * in the chat to receive these updates.
     * @var ChatJoinRequest|null
     */
    public ?ChatJoinRequest $chat_join_request = null;
    /**
     * Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these
     * updates.
     * @var ChatBoostUpdated|null
     */
    public ?ChatBoostUpdated $chat_boost = null;
    /**
     * Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     * @var ChatBoostRemoved|null
     */
    public ?ChatBoostRemoved $removed_chat_boost = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'message':
            case 'edited_message':
            case 'channel_post':
            case 'edited_channel_post':
                return new Message($data);
            case 'inline_query':
                return new InlineQuery($data);
            case 'chosen_inline_result':
                return new ChosenInlineResult($data);
            case 'callback_query':
                return new CallbackQuery($data);
            case 'shipping_query':
                return new ShippingQuery($data);
            case 'pre_checkout_query':
                return new PreCheckoutQuery($data);
            case 'poll':
                return new Poll($data);
            case 'poll_answer':
                return new PollAnswer($data);
            case 'my_chat_member':
            case 'chat_member':
                return new ChatMemberUpdated($data);
            case 'chat_join_request':
                return new ChatJoinRequest($data);
            case 'message_reaction':
                return new MessageReactionUpdated($data);
            case 'message_reaction_count':
                return new MessageReactionCountUpdated($data);
            case 'chat_boost':
                return new ChatBoostUpdated($data);
            case 'removed_chat_boost':
                return new ChatBoostRemoved($data);
        }

        return null;
    }

}