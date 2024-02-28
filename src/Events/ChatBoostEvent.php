<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatBoostUpdated;

final class ChatBoostEvent extends Event
{
    public ChatBoostUpdated $payload;
}