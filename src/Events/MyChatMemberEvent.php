<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatMemberUpdated;

class MyChatMemberEvent
{
    public ChatMemberUpdated $payload;
}