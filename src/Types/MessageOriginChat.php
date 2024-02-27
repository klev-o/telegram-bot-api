<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * Class MessageOriginChat
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageoriginchat
 */
final class MessageOriginChat extends MessageOrigin
{
    /**
     * UChat that sent the message originally
     * @var Chat
     */
    public Chat $sender_chat;
    /**
     * Optional. For messages originally sent by an anonymous chat administrator, original message author signature
     * @var string|null
     */
    public ?string $author_signature;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'sender_chat':
                return new Chat($data);

        }

        return parent::bindObjects($key, $data);
    }
}