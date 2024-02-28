<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the source of a chat boost. It can be one of
 *
 * ChatBoostSourcePremium
 * ChatBoostSourceGiftCode
 * ChatBoostSourceGiveaway
 *
 * Class ChatBoostSource
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostsource
 */
abstract class ChatBoostSource extends BaseType
{
    public const SOURCE_PREMIUM = 'premium';
    public const SOURCE_GIFT = 'gift_code';
    public const SOURCE_GIVEAWAY = 'giveaway';

    /**
     * Source of the boost
     * @var string
     */
    protected string $source;
}