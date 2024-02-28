<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about a chat boost.
 *
 * Class ChatBoost
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboost
 */
final class ChatBoost extends BaseType
{
    /**
     * Unique identifier of the boost
     * @var string
     */
    public string $boost_id;
    /**
     * Point in time (Unix timestamp) when the chat was boosted
     * @var int
     */
    public int $add_date;
    /**
     * Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium
     * subscription is prolonged
     * @var int
     */
    public int $expiration_date;
    /**
     * Source of the added boost
     * @var ChatBoostSource
     */
    public ChatBoostSource $source;

    protected function bindObjects($key, $data)
    {
        if ($key == 'source') {
            switch ($data['source']) {
                case ChatBoostSource::SOURCE_PREMIUM:
                    return new ChatBoostSourcePremium($data);
                case ChatBoostSource::SOURCE_GIFT:
                    return new ChatBoostSourceGiftCode($data);
                case ChatBoostSource::SOURCE_GIVEAWAY:
                    return new ChatBoostSourceGiveaway($data);
            }
        }

        return parent::bindObjects($key, $data);
    }
}