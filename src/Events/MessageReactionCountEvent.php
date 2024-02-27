<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\MessageReactionCountUpdated;

final class MessageReactionCountEvent extends Event
{
    public MessageReactionCountUpdated $payload;
}