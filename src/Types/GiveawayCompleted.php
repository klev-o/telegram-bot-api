<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 *
 * Class GiveawayCompleted
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#giveawaycompleted
 */
final class GiveawayCompleted extends BaseType
{
    /**
     * Number of winners in the giveaway
     * @var int
     */
    public int $winner_count;
    /**
     * Optional. Number of undistributed prizes
     * @var int|null
     */
    public ?int $unclaimed_prize_count = null;
    /**
     * Optional. Message with the giveaway that was completed, if it wasn't deleted
     * @var Message|null
     */
    public ?Message $giveaway_message = null;
    /**
     * Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram
     * Premium giveaway.
     * @var bool|null
     */
    public ?bool $is_star_giveaway = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'giveaway_message':
                return new Message($data);
        }

        return null;
    }
}