<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\InlineMode\ChosenInlineResult;
use Klev\TelegramBotApi\Types\InlineMode\InlineQuery;
use Klev\TelegramBotApi\Types\Payments\PreCheckoutQuery;
use Klev\TelegramBotApi\Types\Payments\ShippingQuery;

/**
 * Class Update
 *
 * @see https://core.telegram.org/bots/api#update
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
    public ?Message $message;
    /**
     * Optional. New version of a message that is known to the bot and was edited
     * @var Message|null
     */
    public ?Message $edited_message;
    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     * @var Message|null
     */
    public ?Message $channel_post;
    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     * @var Message|null
     */
    public ?Message $edited_channel_post;
    /**
     * Optional. New incoming inline query
     * @var InlineQuery|null
     */
    public ?InlineQuery $inline_query;
    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @var ChosenInlineResult|null
     */
    public ?ChosenInlineResult $chosen_inline_result;
    /**
     * Optional. New incoming callback query
     * @var CallbackQuery|null
     */
    public ?CallbackQuery $callback_query;
    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     * @var ShippingQuery|null
     */
    public ?ShippingQuery $shipping_query;
    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     * @var PreCheckoutQuery|null
     */
    public ?PreCheckoutQuery $pre_checkout_query;
    /**
     * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     * @var Poll|null
     */
    public ?Poll $poll;
    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were
     * sent by the bot itself.
     * @var PollAnswer|null
     */
    public ?PollAnswer $poll_answer;

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
        }

        return null;
    }

}