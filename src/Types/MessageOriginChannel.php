<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The message was originally sent to a channel chat.
 *
 * Class MessageOriginChannel
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageoriginchannel
 */
final class MessageOriginChannel extends MessageOrigin
{
    /**
     * Channel chat to which the message was originally sent
     * @var Chat
     */
    public Chat $chat;
    /**
     * Unique message identifier inside the chat
     * @var int
     */
    public int $message_id;
    /**
     * Optional. Signature of the original post author
     * @var string|null
     */
    public ?string $author_signature;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'chat':
                return new Chat($data);

        }

        return parent::bindObjects($key, $data);
    }
}