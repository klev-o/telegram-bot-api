<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a boost removed from a chat.
 *
 * Class ChatBoostRemoved
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostremoved
 */
final class ChatBoostRemoved extends BaseType
{
    /**
     * Chat which was boosted
     * @var Chat
     */
    public Chat $chat;
    /**
     * Unique identifier of the boost
     * @var string
     */
    public string $boost_id;
    /**
     * Point in time (Unix timestamp) when the boost was removed
     * @var int
     */
    public int $remove_date;
    /**
     * Source of the removed boost
     * @var ChatBoostSource
     */
    public ChatBoostSource $source;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
            case 'source':
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