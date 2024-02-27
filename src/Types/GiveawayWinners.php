<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 *
 * Class GiveawayWinners
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#giveawaywinners
 */
final class GiveawayWinners extends BaseType
{
    /**
     * The chat that created the giveaway
     * @var Chat
     */
    public Chat $chat;
    /**
     * Identifier of the message with the giveaway in the chat
     * @var int
     */
    public int $giveaway_message_id;
    /**
     * Point in time (Unix timestamp) when winners of the giveaway were selected
     * @var int
     */
    public int $winners_selection_date;
    /**
     * Total number of winners in the giveaway
     * @var int
     */
    public int $winner_count;
    /**
     * List of up to 100 winners of the giveaway
     * @var User[]
     */
    public array $winners;
    /**
     * Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     * @var int|null
     */
    public ?int $additional_chat_count = null;
    /**
     * Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for
     * @var int|null
     */
    public ?int $premium_subscription_month_count = null;
    /**
     * Optional. Number of undistributed prizes
     * @var int|null
     */
    public ?int $unclaimed_prize_count = null;
    /**
     * Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
     * @var bool|null
     */
    public ?bool $only_new_members = null;
    /**
     * Optional. True, if the giveaway was canceled because the payment for it was refunded
     * @var bool|null
     */
    public ?bool $was_refunded = null;
    /**
     * Optional. Description of additional giveaway prize
     * @var string|null
     */
    public ?string $prize_description = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'winners':
                $result = [];
                foreach ($data as $user) {
                    $result[] = new User($user);
                }
                return $result;
            case 'chat':
                return new Chat($data);
        }

        return null;
    }
}