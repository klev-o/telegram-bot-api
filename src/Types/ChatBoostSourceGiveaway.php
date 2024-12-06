<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The boost was obtained by the creation of a Telegram Premium giveaway. This boosts the chat 4 times for the
 * duration of the corresponding Telegram Premium subscription.
 *
 * Class ChatBoostSourceGiveaway
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcegiveaway
 */
final class ChatBoostSourceGiveaway extends ChatBoostSource
{
    /**
     * Identifier of a message in the chat with the giveaway; the message could have been deleted already.
     * May be 0 if the message isn't sent yet.
     * @var int
     */
    public int $giveaway_message_id;
    /**
     * Optional. User that won the prize in the giveaway if any
     * @var User|null
     */
    public ?User $user = null;
    /**
     * Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @var int|null
     */
    public ?int $prize_star_count = null;
    /**
     * Optional. True, if the giveaway was completed, but there was no user to win the prize
     * @var bool|null
     */
    public ?bool $is_unclaimed = null;

    protected function bindObjects($key, $data)
    {
        if ($key == 'user') {
            return new User($data);
        }

        return parent::bindObjects($key, $data);
    }
}