<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatJoinRequest;

class ChatJoinRequestEvent extends Event
{
    public ChatJoinRequest $payload;
}