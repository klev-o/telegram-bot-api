<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatBoostRemoved;

final class RemovedChatBoostEvent extends Event
{
    public ChatBoostRemoved $payload;
}