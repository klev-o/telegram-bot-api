<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\MessageReactionUpdated;

final class MessageReactionEvent extends Event
{
    public MessageReactionUpdated $payload;
}