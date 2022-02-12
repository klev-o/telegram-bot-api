<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Message;

class ChannelPostEvent extends Event
{
    public Message $payload;
}