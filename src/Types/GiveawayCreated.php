<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about the creation of a scheduled giveaway. Currently holds no information.
 *
 * Class GiveawayCreated
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#giveawaycreated
 */
final class GiveawayCreated extends BaseType
{
    /**
     * Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @var int|null
     */
    public ?int $prize_star_count = null;
}