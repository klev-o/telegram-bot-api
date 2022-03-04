<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\ChatMemberUpdated;

class MyChatMemberEvent extends Event
{
    public ChatMemberUpdated $payload;
}