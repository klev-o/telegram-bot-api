<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a boost added to a chat or changed.
 *
 * Class ChatBoostUpdated
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatboostupdated
 */
final class ChatBoostUpdated extends BaseType
{
    /**
     * Chat which was boosted
     * @var Chat
     */
    public Chat $chat;
    /**
     * Information about the chat boost
     * @var ChatBoost
     */
    public ChatBoost $boost;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);
            case 'boost':
                return new ChatBoost($data);
        }

        return parent::bindObjects($key, $data);
    }
}