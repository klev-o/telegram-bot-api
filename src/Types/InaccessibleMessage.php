<?php

namespace Klev\TelegramBotApi\Types;

final class InaccessibleMessage extends BaseType implements MaybeInaccessibleMessage
{
    /**
     * Chat the message belonged to
     * @var Chat
     */
    public Chat $chat;
    /**
     * Unique message identifier inside the chat
     * @var int
     */
    public int $message_id;
    /**
     * Always 0. The field can be used to differentiate regular and inaccessible messages.
     * @var int
     */
    public int $date;
}