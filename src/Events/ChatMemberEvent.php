<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatMemberUpdated;

class ChatMemberEvent extends Event
{
    public ChatMemberUpdated $payload;
}